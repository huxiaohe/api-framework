<?php 

namespace Rudder\Mvc\Intercept;

use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;

/**
 * Interface Interceptor
 * @package Rudder\Mvc\Intercept
 */
interface Interceptor {
    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Dispatcher $dispatcher
     * @param array $params
     * @return mixed
     */
    public function action(Event $event, Dispatcher $dispatcher, $params);
} 