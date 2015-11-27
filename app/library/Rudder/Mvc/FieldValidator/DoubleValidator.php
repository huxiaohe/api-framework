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
class DoubleValidator implements Validator {

    private static $_REQUIRED = "required";

    private static $_MIN = "min";

    private static $_MAX = "max";

    /**
     * 验证字段是否符合注解数据参数约定条件，如果不能满足条件，返回错误结束该请求。
     *
     * @param string $key 传入的域的值
     * @param int $value
     * @param array $params 基于类模板读取的注解数组。
     */
    public function validator($key,$value,$params) {
        //是否必须检测
        if (isset($params[DoubleValidator::$_REQUIRED])&& $params[DoubleValidator::$_REQUIRED]==true) {
            if (!is_numeric($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."是必填项)",Message::$_ERROR_FORMAT);
            }
        }
        if ($value!=null) {
            //类型检查
            if (!is_numeric($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."必须是double型)",Message::$_ERROR_FORMAT);
            }
            $dvalue = doubleval($value);
            if (isset($params[DoubleValidator::$_MIN])) {
                $min_d = $params[DoubleValidator::$_MIN];
                if (isset($min_d)) {
                    if ($min_d && $dvalue<$min_d) {
                        ResponseApi::sendErrorAndEnd($key."=".$value."是最小值是".$min_d.")",Message::$_ERROR_FORMAT);
                    }
                }
            }
            if (isset($params[DoubleValidator::$_MAX])) {
                $max_d = $params[DoubleValidator::$_MAX];
                if (isset($max_d)) {
                    if ($max_d && $dvalue>$max_d) {
                        ResponseApi::sendErrorAndEnd($key."=".$value."是最大值是".$max_d.")",Message::$_ERROR_FORMAT);
                    }
                }
            }
        }
    }
} 