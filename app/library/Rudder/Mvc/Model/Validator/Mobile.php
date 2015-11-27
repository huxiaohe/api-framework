<?php

namespace Rudder\Mvc\Model\Validator;

use Phalcon\Mvc\Model\Validator;
use Phalcon\Mvc\Model\ValidatorInterface;
use Phalcon\Mvc\EntityInterface;

class Mobile extends Validator implements ValidatorInterface {
	
	public function validate(EntityInterface $record) {
		$field = $this->getOption('field');
		
		$value = $record->$field;
		
		if (!preg_match('/1[3-9][0-9]{9}/', $value)) {
			$this->appendMessage("无效的手机号!", $field, "Mobile");
			return false;
		}
		
		return true;
	}
}
