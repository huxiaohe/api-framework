<?php
/**
 * Created by PhpStorm.
 * User: wliu
 * Date: 14-11-17
 * Time: 下午7:06
 */

namespace Rudder\Mvc\FieldValidator;

use Rudder\Mvc\ResponseApi;
use Rudder\Mvc\Message;

/**
 * Field校验器，用以基于注解的字段规则校验。
 *
 * Class IntValidator
 * @package Rudder\Mvc\Validator
 */
class EnumValidator implements Validator {

    private static $_REQUIRED = "required";

    private static $_SCOPE = "scope";

    /**
     * 验证字段是否符合注解数据参数约定条件，如果不能满足条件，返回错误结束该请求。
     * @param string $key 传入的域的值
     * @param object $value
     * @param array $params 基于类模板读取的注解数组
     * @throws
     */
    public function validator($key,$value,$params) {
        if (isset($params[EnumValidator::$_REQUIRED]) && $params[EnumValidator::$_REQUIRED]==true){
            if ($value==null) {
                ResponseApi::sendErrorAndEnd($key."=".$value."是必填项",Message::$_ERROR_FORMAT);
            }
        };

        if (isset($params[EnumValidator::$_REQUIRED]) && !is_array($params[EnumValidator::$_SCOPE])) {
            throw new ValidatorNotFoundException("类枚举注解格式错误，应该定义为数组,例如[1,2,3]");
        }
        if ($value && isset($params[EnumValidator::$_SCOPE])) {
            $b = 0;
            $arr = $params[EnumValidator::$_SCOPE];
            $c = count($arr);
            $message = "";
            for($i=0;$i<$c;$i++) {
                $message = $message.$arr[$i].",";
                if ($params[EnumValidator::$_SCOPE][$i]==$value) {
                    $b = 1;
                    break;
                }
            }
            if ($b==0) {
                ResponseApi::sendErrorAndEnd($key."=".$value.",范围必须在[".$message."]",Message::$_ERROR_FORMAT);
            }
        }
    }
} 