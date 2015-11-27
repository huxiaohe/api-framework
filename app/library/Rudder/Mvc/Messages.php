<?php

namespace Rudder\Mvc;

/**
 * Class Message
 * @package Rudder\Mvc
 */
class Messages {
    /**
     * 处理正常完成
     * @var int
     */
    public static $OK = 0;

    /**
     * 系统错误（所有未被主动识别的错误。）
     * @var int
     */
    public static $ERROR_SYSTEM = -10;

    /**
     * 提交的数据格式错误（客户端提交的数据不合法）
     * @var int
     */
    public static $ERROR_FORMAT = -20;

    /**
     * 请求协议不正确
     * @var int
     */
    public static $ERROR_CODING = -21;

    /**
     * 资源请求错误，试图获取已经过期或则并不存在的资源。
     * @var int
     */
    public static $ERROR_NOFOUND = -22;

    /**
     * 请求路径不存在。
     * @var int
     */
    public static $ERROR_NOPATH = -23;

    /**
     * 需要登录才能访问
     * @var int
     */
    public static $ERROR_UNLOGIN = -30;
    /**
     * 权限错误，试图访问未经允许的资源
     * @var int
     */
    public static $ERROR_AUTHORIZATION = -31;

    /**
     * 业务错误
     * @var int
     */
    public static $ERROR_LOGIC = -40;

    /**
     * @var array
     */
    private static $message_txt_arr = array(
        '0' => 'OK',
        '-10' => '系统繁忙，请稍后再试！',
        '-20' => '提交的数据格式不合法！',
        '-21' => '请求的协议错误！',
        '-22' => '您访问的资源已过期或者并不存在！',
        '-23' => '请求路径不存在！',
        '-30' => '请登录后再试！',
        '-31' => '您没有权限访问该资源，请联系管理员！',
        '-40' => '业务逻辑错误！',
    );

    public static function get($code) {
        if (isset(Messages::$message_txt_arr[$code])) {
            return Messages::$message_txt_arr[$code];
        }
        return '系统未定义该错误消息。';
    }
}