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
class IntValidator implements Validator {

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
        //是否必须
        if (isset($params[IntValidator::$_REQUIRED]) && $params[IntValidator::$_REQUIRED]==true) {
            if (!is_numeric($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."是必填项)",Message::$_ERROR_FORMAT);
            }
        };

        if ($value!=null) {
            //类型检查
            if (!is_numeric($value)) {
                ResponseApi::sendErrorAndEnd($key."=".$value."是必须是int型)",Message::$_ERROR_FORMAT);
            }
            $cvalue = intval($value);
            if(isset($params[IntValidator::$_MIN])) {
                $min = $params[IntValidator::$_MIN];
                if ($min && $cvalue<$min) {
                    ResponseApi::sendErrorAndEnd($key."=".$value."的最小值是".$min.")",Message::$_ERROR_FORMAT);
                }
            }
            if(isset($params[IntValidator::$_MAX])) {
                $max = $params[IntValidator::$_MAX];
                if ($max && $cvalue>$max) {
                    ResponseApi::sendErrorAndEnd($key."=".$value."的最大值是".$max.")",Message::$_ERROR_FORMAT);
                }
            }
        }


    }
} 