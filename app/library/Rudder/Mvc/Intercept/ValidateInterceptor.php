<?php

namespace Rudder\Mvc\Intercept;

use Phalcon\DI\FactoryDefault;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use Rudder\AppConstant;
use Rudder\Mvc\FieldValidator\ValidatorFactory;

/**
 * 校验拦截器，用以传入参数的校验。
 *
 * Class ValidateInterceptor
 * @package Rudder\Mvc\Intercept
 */
class ValidateInterceptor implements Interceptor {
	
    /**
     * @var \Phalcon\Annotations\Adapter
     */
    private $reader;

    /**
     *
     * @param \Phalcon\Annotations\Adapter $adapter
     */
    public function __construct($adapter){
        $this->reader = $adapter;
    }
    /**
     *
     * @return \Phalcon\Logger\Adapter\File;
     */
    public function getLogger() {
        return FactoryDefault::getDefault()->get("app_log");
    }

    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Dispatcher $dispatcher
     * @param array $params
     * @return mixed
     */
    public function action(Event $event, Dispatcher $dispatcher, $params) {
        $controller = $dispatcher ->getControllerName();
        $action = $dispatcher->getActionName();
        
        $key = $controller.'/'.$action;
        // $cname = $dispatcher->getDI()->get(AppConstant::DI_SERVICE_API)->getApiClass($key);
        
        //非注册Api，不需要做校验
        // if ($cname == null) return;
        $cname = 'Account\register';

        $c = new \ReflectionClass($cname);

        $object = $c->newInstance();

        //赋值
        $this->arrToObj($object, $params);
        $this->validate($cname, $object);
        $dispatcher->setParam(AppConstant::HTTP_PROTOCOL_DATA, $object);
    }

    /**
     * 协议校验
     * @param $cname
     * @param $obj
     */
    private function validate($cname, $obj) {
        $properties =$this->reader->getProperties("$cname");
        exit(var_dump($properties));
        foreach($properties as $key => $value) {
            foreach($value as $annotation) {
                if ($annotation->getName()=="validate") {
                    $params = $annotation->getArguments();
                    //如果是必填的选项。
                    $validator = ValidatorFactory::getInstance()->getValidator($params['type']);
                    $validator->validator($key,$obj->$key,$params);
                } else if ($annotation->getName()=="where") {
                    $params = $annotation->getArguments();
                    $sql = null;
                    if (isset($params['type']) && $params['type']=='string') {
                        $sql = ' and '.$params['field'].' '.$params['op'].' '.$obj->$key;
                    } else {
                        if ($obj->$key) {
                            $sql = ' and '.$params['field'].' '.$params['op'].$obj->$key;
                        }
                    }
                    if ($sql) $obj->where = $obj->where.$sql;
                }
            }
        }
    }

    /**
     *
     * @param $obj
     * @param $arr
     */
    private function arrToObj($obj, $arr) {
        //TODO 如果传入的数组参数没有值，应该抛出无法转换的异常。待设计
        if ($arr == null || count($arr) == 0) return;
        foreach($arr as $key=>$val) {
            $obj->$key = $val;
        }
        return;
    }

} 