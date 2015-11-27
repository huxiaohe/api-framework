<?php 

namespace Rudder\Mvc;

use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Annotations\Adapter\Memory;

use Rudder\Mvc\Intercept\ValidateInterceptor;
use Rudder\Mvc\ResponseApi;

class DispatchIntercept extends Plugin {

    public function __construct($dependencyInjector)
    {
        $this->_dependencyInjector = $dependencyInjector;
    }

    /**
     * This action is executed before execute any action in the application
     * @param Event $event
     * @param Dispatcher $dispatcher
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
    	//
    	$validator = new ValidateInterceptor(new Memory());
		
    	
    }

    /**
     *
     * @param Event $event
     * @param Dispatcher $dispatcher
     */
    public function afterDispatch(Event $event, Dispatcher $dispatcher)
    {
    	$result = $dispatcher->getReturnedValue();
    	ResponseApi::sendOk($result);
    }

    /**
     * 抛出异常
     * @param Event $event
     * @param Dispatcher $dispatcher
     */
    public function beforeException(Event $event, Dispatcher $dispatcher, $exception) 
    {
        ResponseApi::sendError($exception->getCode(), $exception->getMessage());
    }
    
}
