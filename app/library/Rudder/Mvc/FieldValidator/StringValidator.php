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
class StringValidator implements Validator {

    private static $_REQUIRED = "required";

    private static $_MIN_LEN = "minlen";

    private static $_MAX_LEN = "maxlen";

    /**
     * 验证字段是否符合注解数据参数约定条件，如果不能满足条件，返回错误结束该请求。
     *
     * @param $key string 传入的域的值
     * @param $value int
     * @param array $params  基于类模板读取的注解数组。
     */
    public function validator($key,$value,$params) {
        if (isset($params[StringValidator::$_REQUIRED]) && $params[StringValidator::$_REQUIRED]==true) {
            if (is_null($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."是必填项)",Message::$_ERROR_FORMAT);
            }
        };
        if ($value) {
            if (!is_string($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."必须是string型)",Message::$_ERROR_FORMAT);
            }
            if (isset($params[StringValidator::$_MIN_LEN])) {
                $minlen = $params[StringValidator::$_MIN_LEN];
                if ($minlen && strlen($value)<$minlen) {
                    ResponseApi::sendErrorAndEnd($key."=".$value."最小长度是".$minlen.")",Message::$_ERROR_FORMAT);
                }
            }
            if (isset($params[StringValidator::$_MAX_LEN])) {
                $maxlen = $params[StringValidator::$_MAX_LEN];
                if ($maxlen && strlen($value)>$maxlen) {
                    ResponseApi::sendErrorAndEnd($key."=".$value."最大长度是".$maxlen.")",Message::$_ERROR_FORMAT);
                }
            }

        }
    }
} 