<?php 

use Phalcon\Mvc\Model\Message;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\InclusionIn;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Regex;

use Rudder\Utils\Util;
use Rudder\Mvc\Messages;
use Rudder\Validation\Validator\Mobile;
use Rudder\Validation\Validator\Existence;

/**
 * @RoutePrefix("/account")
 */
class AccountController extends ControllerBase {
	
	const VCODE_LIFETIME = 180;
	const VCODE_SENDTIME_PREFIX = 'send_time_';
	const REGISTER_VCODE = 'register_vcode';
	const FORGET_VCODE = 'forget_vcode';
	const SEND_VCODE_REGISTER = '1';
	const SEND_VCODE_FINDPWD = '2';
	const CHECKVCODE_REGISTER = '1';
	const CHECKVCODE_FORGET = '2';
	
	private $_session;
	private $_redis;
	
	public function initialize() {
		$this->_session = $this->getSession();
		$this->_redis = $this->getRedis();
// 		$this->_redis = $this->_session;
	}
	
	/**
	 * 用户注册
	 * @Post("/register")
	 */
	public function registerAction() {
		$this->_validation
			->add('vcode', new PresenceOf(array(
					'message' => '验证码错误！',
					'cancelFail' => true
			)))
			->add('mobile', new Mobile(array(
					'message' => '请输入正确的手机号',
					'cancelOnFail' => true
			)))
			->add('mobile', new Uniqueness(array(
					'message' => '手机号已经存在！',
					'model'		=> 'Users',
					'cancelOnFail' => true
			)))
			->add('password', new StringLength(array(
					'max' => 20,
					'min' => 6,
					'messageMinimum' => '密码长度最少6位(包括6位)',
					'messageMaximum' => '密码长度不能大于20位(包括20位)',
					'cancelOnFail' => true
			)))
			->add('sex', new InclusionIn(array(
					'message' => '性别选择错误',
					'domain' => array('1', '2')
			)));
		$params = $this->validate();
		$mobile = $params['mobile'];
		$vcode = $params['vcode'];
		
		$keyName = self::REGISTER_VCODE . $mobile;
		if(!$this->checkVcode($keyName, $vcode)) {
			throw new Exception('验证码错误', Messages::$ERROR_FORMAT);
		}
		
		$user = new Users();
		$messages = $user->register($params);
		if(count($messages)) {
			throw new Exception($messages[0], Messages::$ERROR_FORMAT);
		}
	}
	
	/**
	 * 用户登录
	 * @Post("/login")
	 */
	public function loginAction() {
		$this->_validation
			->add('mobile', new Mobile(array(
					'message' => '手机号码错误',
					'cancelOnFail' => true
			)))
			->add('password', new PresenceOf(array(
					'message' => '请输入密码',
			)));
		$params = $this->validate();
		
		$user = Users::login($params['mobile'], $params['password']);
		if(!$user) {
			throw new Exception('用户名或者密码错误', Messages::$ERROR_SYSTEM);
		}
		$this->_session->set(self::HTTP_USER_AUTH, $user);
		return $user;
	}
	
	/**
	 * 修改密码
	 * @Post("/forget")
	 */
	public function forgetAction() {
		$this->_validation
			->add('mobile', new Mobile(array(
					'message' => '手机号码错误',
					'cancelOnFail' => true
			)))
			->add('mobile', new Existence(array(
					'message' => '手机号码没有注册过',
					'model'	=> 'Users',
					'cancelOnFail' => true
			)))
			->add('vcode', new Regex(array(
					'pattern' => '/^\d{6}$/',
					'message' => '请输入验证码',
					'cancelOnFail' => true
			)))
			->add('password', new StringLength(array(
					'max' => 20,
					'min' => 6,
					'messageMinimum' => '密码长度最少6位(包括6位)',
					'messageMaximum' => '密码长度不能大于20位(包括20位)',
			)));
		$params = $this->validate();
		$keyName = self::FORGET_VCODE . $params['mobile'];
		if(!$this->checkVcode($keyName, $params['vcode'])) {
			throw new Exception('验证码错误', Messages::$ERROR_FORMAT);
		}
		$parameters = array();
		$parameters['conditions'] = sprintf('mobile = "%s"', $params['mobile']);
		$user = Users::findFirst($parameters);
		$this->save($user);
		
	}
	
	/**
	 * @Get("/sendVcode")
	 */
	public function sendVcodeAction() {
		$this->_validation
			->add('operate', new InclusionIn(array(
					'message' 		=> 'operate字段值必须是1或2',
					'domain' 		=> array('1', '2'),
					'cancelOnFail' 	=> true
			)))
			->add('mobile', new Mobile(array(
					'message' 		=> '手机号码错误',
					'cancelOnFail' 	=> true
			)));
		$params = $this->validate();
		// 注册发送验证码
		if($params['operate'] == self::SEND_VCODE_REGISTER) {
			$this->_validation
				->add('mobile', new Uniqueness(array(
						'message' => '手机号已经注册过了！',
						'model'		=> 'Users',
				)));
			$prefix = self::REGISTER_VCODE;
		} else if($params['operate'] == self::SEND_VCODE_FINDPWD) { // 找回密码发送验证码
			$this->_validation
				->add('mobile', new Existence(array(
						'message' => '手机号不存在！',
						'model'		=> 'Users',
				)));
			$prefix = self::FORGET_VCODE;
		}
		$params = $this->validate($params);
		
		// 验证码缓存的key
		$keyName = $prefix . $params['mobile'];
		
		$sendTime = $this->_redis->get(self::VCODE_SENDTIME_PREFIX. $keyName);
		$time = time();
		if($time - $sendTime < 60) {
			throw new Exception('验证码一分钟只能发一次', Messages::$ERROR_SYSTEM);
		}
		$vcode = $this->getVcode($keyName, $params['mobile']);
		// 验证码写到redis
		$this->_redis->save($keyName, $vcode, self::VCODE_LIFETIME);
		$this->_redis->save(self::VCODE_SENDTIME_PREFIX. $keyName, $time);
		// 发送验证码
		$this->getDI()->getSms()->send($params['mobile'], '您的验证码：'.$vcode);
	}
	
	/**
	 * @Get("/checkVcode")
	 */
	public function checkVcodeAction() {
		$this->_validation
			->add('operate', new InclusionIn(array(
					'domain' => array('1', '2'),
					'message' => 'operate只能是1或2',
					'cancelOnFail' 	=> true
			)))
			->add('vcode', new Regex(array(
					'pattern' => '/^\d{6}$/',
					'message' => '验证码错误',
					'cancelOnFail' 	=> true
			)))
			->add('mobile', new Mobile(array(
					'message' => '手机号码错误',
			)));
		$params = $this->validate();
		if(self::CHECKVCODE_REGISTER == $params['operate']) {
			
			$keyName= self::REGISTER_VCODE . $params['mobile'];
		} else if(self::CHECKVCODE_FORGET == $params['operate']) {
			
			$keyName = self::FORGET_VCODE . $params['mobile'];
		}
		
		if(!$this->checkVcode($keyName, $params['vcode'])) {
			throw new Exception('验证码错误', Messages::$ERROR_FORMAT);
		}
	}
	
	/**
	 * @Get("/logout")
	 */
	public function logoutAction() {
		// $this->_session->destroy1();
		// $_SESSION = null;
		$this->_session->remove(self::HTTP_USER_AUTH);
	}
	
	private function checkVcode($keyName, $vcode) {
		$checkNo = $this->_redis->get($keyName);
		if(!$vcode || strcmp($checkNo, $vcode) !== 0) {
			return false;
		}
		$this->_redis->delete($keyName);
		$this->_redis->delete(self::VCODE_SENDTIME_PREFIX . $keyName);
		return true;
	}
	
	private function getVcode($keyName) {
		$value = $this->_redis->get($keyName);
		if(!$value) {
			$value = Util::random();
		}
		return $value;
	}
}

