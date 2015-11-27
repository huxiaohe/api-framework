<?php

namespace Rudder\Validation\Validator;

use Phalcon\Validation\Message;
use Phalcon\Validation;
use Phalcon\Validation\Validator;

class Ip extends Validator {
	
	public function validate(Validation $validation, $attribute) {
		$value = $validation->getValue($attribute);
		
		if (!filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6)) {
		
			$message = $this->getOption('message');
			if (!$message) {
				$message = 'The IP is not valid';
			}
		
			$validation->appendMessage(new Message($message, $attribute, 'Ip'));
		
			return false;
		}
		return true;
		
	}
}
