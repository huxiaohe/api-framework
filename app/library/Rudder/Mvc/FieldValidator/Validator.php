<?php
/**
 * Created by PhpStorm.
 * User: wliu
 * Date: 14-11-17
 * Time: 下午7:07
 */

namespace Rudder\Mvc\FieldValidator;

/**
 * Field校验器，用以基于注解的字段规则校验。
 *
 * Interface Validator
 * @package Rudder\Mvc\FieldValidator
 */
interface Validator {
    /**
     * 验证字段是否符合注解数据参数约定条件，如果不能满足条件，返回错误结束该请求。
     *
     * @param string $key 传入的域的值
     * @param object $value
     * @param array $params 基于类模板读取的注解数组。
     */
    public function validator($key,$value,$params);
} 