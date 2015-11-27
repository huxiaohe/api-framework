<?php

namespace Rudder\Db;

use Phalcon\Db\Profiler;
use Phalcon\Events\Event;
use Phalcon\Logger;

class Listener {
	
	private $_profile;
	private $_logger;
	
	public function __construct($logger) {
		$this->_profile = new Profiler();
		$this->_logger = $logger;
	}
	
	public function beforeQuery(Event $event, $connection) {
		$this->_profile->startProfile($connection->getSQLStatement(), Logger::INFO);
	}
	
	public function afterQuery(Event $event, $connection) {
		$this->_logger->log($connection->getSQLStatement(), Logger::INFO);
		$this->_profile->stopProfile();
	}
	
	public function getProfile() {
		return $this->_profile;
	}
}