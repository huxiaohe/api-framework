<?php

namespace Rudder\Mvc\Router;

use Phalcon\Events\Event;
use Phalcon\Mvc\Router\Annotations;

class Listener {
	
	private $_logger;
	
	public function __construct($logger) {
		$this->_logger = $logger;
	}
	
	public function notMatchedRoute(Event $event, Annotations $annotations) {
		
	}
}
