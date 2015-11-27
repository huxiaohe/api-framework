<?php

use Phalcon\Events\Event,
	Phalcon\Mvc\User\Plugin,
	Phalcon\Mvc\Dispatcher;

// use Rudder\Mvc\ResponseApi;

/**
 * Security
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin {
	
	public function __construct($dependencyInjector) {
		$this->_dependencyInjector = $dependencyInjector;
	}
	
	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event $event        	
	 * @param Dispatcher $dispatcher        	
	 */
	public function beforeDispatch(Event $event, Dispatcher $dispatcher) {
		
	}
	
	public function afterDispatch(Event $event, Dispatcher $dispatcher) {
		
	}
}
