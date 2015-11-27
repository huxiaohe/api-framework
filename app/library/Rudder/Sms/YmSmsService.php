<?php

namespace Rudder\Sms;

define('SCRIPT_ROOT',  dirname(dirname(__DIR__)) . '/emay/');
require SCRIPT_ROOT.'include/Client.php';

class YmSmsService implements SmsServiceInterface {

    private $gwUrl;

    private $serialNumber;

    private $password;
    
    private $sessionKey = '123456';
    
    private $proxyhost = false;
    
    private $proxyport = false;
    
    private $proxyusername = false;
    
    private $proxypassword = false;
    
    private $sign;

    private $connectTimeOut;

    private $readTimeOut;

    /**
     *
     * @param array $options
     */
    public function __construct($options = array()) {
    	if(!$options) {
    		return false;
    	}
    	foreach($options as $key => $val) {
    		if(!$val) continue;
    		$this->$key = $val;
    	}
    	
    	$this->client = new \Client($this->gwUrl,
    			$this->serialNumber,
    			$this->password,
    			$this->sessionKey,
    			$this->proxyhost,
    			$this->proxyport,
    			$this->proxyusername,
    			$this->proxypassword,
    			$this->connectTimeOut,
    			$this->readTimeOut);

    	$this->client->setOutgoingEncoding("UTF-8");
    	
    	$this->statusCode = $this->client->login();
    }

    public function send($to, $content) {
    	$content = $this->sign . $content;
    	$to = array($to);
    	$statusCode = $this->client->sendSMS($to, $content);
    	return $statusCode;
    }
    
}