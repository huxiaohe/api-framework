<?php 

namespace Rudder\Mvc;

use Phalcon\Http\Response;

use Rudder\Mvc\Messages;

/**
 *
 * Class ResponseApi
 * @package Rudder\Mvc
 */
class ResponseApi {

    /**
     * @param null $body
     * @param string $message
     */
    public static function sendOk($body = '', $message = '') {
        if(is_object($message) && method_exists($message, 'getMessage')) { //错误的时候，取出错误提示语
            $message = $message->getMessage();
        }
        $result = array();
        $result['body'] = is_null($body) ? '' : $body;
        $result['code'] = Messages::$OK;
        $result['message'] = $message;
        ResponseApi::sendResult($result);
    }

    /**
     * 将后返回数据包裹成统一格式。
     * @param int $code
     * @param null $message
     */
    public static function sendError($code = -10, $message = '') {
        if(is_object($message) && method_exists($message, 'getMessage')) { //错误的时候，取出错误提示语
            $message = $message->getMessage();
        }
        $result = array();
        $result['body'] = "";
        $result['code'] = $code;
        if ($message == null) {
            $result['message'] = Messages::get($code);
        } else {
            $result['message'] = $message;
        }
        ResponseApi::sendResult($result);
    }

    /**
     * 发送数据
     * @param mixed $result
     */
    private static function sendResult($result) {
        $response = new Response();
        $response->setHeader('Content-Type', 'application/json; charset=UTF-8');
        $response->setHeader('Access-Control-Allow-Origin', '*');
        $response->setJsonContent($result);
        $response->send();
        exit;
    }
}