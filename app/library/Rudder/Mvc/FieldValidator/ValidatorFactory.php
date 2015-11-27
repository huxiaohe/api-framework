<?php
/**
 * Created by PhpStorm.
 * User: wliu
 * Date: 14-11-17
 * Time: 下午7:43
 */

namespace Rudder\Mvc\FieldValidator;

class ValidatorFactory {
    private static $_instance;

    private $FIELD_INT = "int";

    private $FIELD_STRING = "string";

    private $FIELD_ENUM = "enum";

    private $FIELD_DOUBLE = "double";
    /**
     * @return ValidatorFactory
     */
    public static function getInstance() {
       if (ValidatorFactory::$_instance==null) {
           ValidatorFactory::$_instance = new ValidatorFactory();
       }
       return ValidatorFactory::$_instance;
    }

    /**
     * 得到校验器
     * @param $type
     * @return IntValidator|StringValidator
     * @throws \Exception
     */
    public function getValidator($type) {
        if ($type==$this->FIELD_INT) {
            return new IntValidator();
        }
        if ($type==$this->FIELD_STRING) {
            return new StringValidator();
        }
        if ($type==$this->FIELD_ENUM) {
            return new EnumValidator();
        }
        if ($type==$this->FIELD_DOUBLE) {
            return new DoubleValidator();
        }
        throw new ValidatorNotFoundException("定义的类型".$type."没有找到校验器。");
    }
} 