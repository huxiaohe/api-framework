<?php

namespace Rudder\Session\Adapter;

use Phalcon\Session\Adapter;
use Phalcon\Session\AdapterInterface;
use Phalcon\Cache\Frontend\None as FrontendNone;
use Phalcon\Cache\Backend\Redis as RedisCache;

class Redis extends Adapter implements AdapterInterface {
	
	protected $_redis = null;
	
	protected $_lifetime = 8600;
	
	public function getRedis() 
	{
		return $this->_redis;
	}
	
	public function getLifetime() 
	{
		return $this->_lifetime;
	}
	
	/**
	 * Rudder\Session\Adapter\Redis constructor
	 */
	public function __construct($options = [])
	{
	
		if (!isset($options['host'])) {
			$options["host"] = "127.0.0.1";
		}
	
		if (!isset($options['port'])) {
			$options["port"] = 6379;
		}
	
		if (!isset($options['persistent'])) {
			$options["persistent"] = false;
		}
	
		if(isset($options['lifetime'])) {
			$this->_lifetime = $options['lifetime'];
		}
	
		$this->_redis = new RedisCache(
				new FrontendNone(["lifetime" => $this->_lifetime]),
				$options
				);
	
		session_set_save_handler(
				[$this, "open"],
				[$this, "close"],
				[$this, "read"],
				[$this, "write"],
				[$this, "destroy"],
				[$this, "gc"]
				);
	
		parent::__construct($options);
	}
	
	public function open()
	{
		return true;
	}
	
	public function close()
	{
		return true;
	}
	
	/**
	 *
	 * @param string sessionId
	 * @return mixed
	 */
	public function read($sessionId)
	{
		return $this->_redis->get($sessionId, $this->_lifetime);
	}
	
	/**
	 *
	 * @param string sessionId
	 * @param string data
	 */
	public function write($sessionId, $data)
	{
		$this->_redis->save($sessionId, $data, $this->_lifetime);
	}
	
	/**
	 *
	 * @param  string  sessionId
	 * @return boolean
	 */
	public function destroy1($sessionId = null)
	{
		if($sessionId === null) {
			$sessionId = $this->getId();
		}
		$_SESSION = null;
		return $this->_redis->delete($sessionId);
	}
	
	public function gc()
	{
		return true;
	}
	
}
