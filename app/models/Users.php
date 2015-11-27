<?php

use Phalcon\Mvc\Model\Resultset;

use AbstractModels\AbstractUsers;
use Rudder\Mvc\Model\Validator\Mobile;

class Users extends AbstractUsers {
	
	/**
	 * Validations and business logic
	 *
	 * @return boolean
	 */
	public function validation()
	{
		$this->validate(
			new Mobile(
				array(
					'field'		=> 'mobile',
					'require' 	=> true
				)
			)
		);
	
		if ($this->validationHasFailed() == true) {
			return false;
		}
	
		return true;
	}
	
	/**
	 * Independent Column Mapping.
	 * Keys are the real names in the table and the values their names in the application
	 *
	 * @return array
	 */
	public function columnMap()
	{
		return array(
			'user_id' => 'userId',
			'email' => 'email',
			'user_name' => 'username',
			'password' => 'password',
			'question' => 'question',
			'answer' => 'answer',
			'sex' => 'sex',
			'birthday' => 'birthday',
			'user_money' => 'user_money',
			'frozen_money' => 'frozen_money',
			'pay_points' => 'pay_points',
			'rank_points' => 'rank_points',
			'address_id' => 'address_id',
			'reg_time' => 'reg_time',
			'last_login' => 'last_login',
			'last_time' => 'last_time',
			'last_ip' => 'last_ip',
			'visit_count' => 'visit_count',
			'user_rank' => 'user_rank',
			'is_special' => 'is_special',
			'ec_salt' => 'ec_salt',
			'salt' => 'salt',
			'parent_id' => 'parent_id',
			'flag' => 'flag',
			'alias' => 'alias',
			'msn' => 'msn',
			'qq' => 'qq',
			'office_phone' => 'office_phone',
			'home_phone' => 'home_phone',
			'mobile_phone' => 'mobile',
			'is_validated' => 'is_validated',
			'credit_line' => 'credit_line',
			'passwd_question' => 'passwd_question',
			'passwd_answer' => 'passwd_answer'
		);
	}
	
	public function initialize() 
	{
		self::setup(array(
				'notNullValidations' => false
		));
	}
	
	public function beforeSave()
	{
		$this->password = md5($this->password);
	}
	
	public static function isExists($mobile)
	{
		return !!parent::findFirst("mobile = '{$mobile}'");
	}
	
	public function register($data)
	{
		foreach($data as $field => $value)
		{
			if(in_array($field, $this->columnMap()))
			{
				$this->{$field} = $value;
			}
		}
		$this->save();
		return $this->getMessages();
	}
	
	public static function login($account, $password)
	{
		$parameters = array();
		$parameters['conditions'] = sprintf('mobile = "%s" AND password = "%s"', $account, md5($password));
		$parameters['columns'] = array('userId', 'username', 'mobile');
		return self::findFirst($parameters);
	}
	
}
