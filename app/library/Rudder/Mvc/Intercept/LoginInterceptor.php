<?php
/**
 * Created by PhpStorm.
 * User: wliu
 * Date: 14-11-17
 * Time: 下午6:21
 */

namespace Rudder\Mvc\Intercept;

use Rudder\AppConstant;
use Rudder\Mvc\Message;
use Rudder\Mvc\ResponseApi;

class LoginInterceptor implements Interceptor{

    /**
     * 校验拦截器，用以传入参数的校验。
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Dispatcher $dispatcher
     * @param array $params
     * @return mixed
     */
    public function action($event,$dispatcher,$params) {
        //$module = $dispatcher->getModuleName();
        //$controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();
        if ($action=='auth') return;

        $auth = $dispatcher->getDI()->get(AppConstant::DI_SERVICE_SESSION)->get(AppConstant::HTTP_USER_AUTH);
        if (!$auth) {
            ResponseApi::sendErrorAndEnd(null,Message::$_ERROR_UNLOGIN);
        }
    }
} 