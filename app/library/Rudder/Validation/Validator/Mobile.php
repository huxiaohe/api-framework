<?php

namespace Rudder\Validation\Validator;

use Phalcon\Validation\Message;
use Phalcon\Validation;
use Phalcon\Validation\Validator;

class Mobile extends Validator{
	
	public function validate(Validation $validation, $attribute) {
		$value = $validation->getValue($attribute);
		
		if(!preg_match('/1[3578][0-9]{9}/', $value)) {
			
			$message = $this->getOption('message');
			if(!$message) {
				$message = '请输入正确的手机号';
			}
			
			$validation->appendMessage(new Message($message, $attribute, 'Mobile'));
			return false;
		}
		return true;
		
	}
}
