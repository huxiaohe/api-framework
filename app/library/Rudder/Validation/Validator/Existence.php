<?php

namespace Rudder\Validation\Validator;

use Phalcon\Validation\Message;
use Phalcon\Validation;
use Phalcon\Validation\Validator;

/**
 * Check that a field is unique in the related table
 * <code>
 * $validator->add('username', new Existence(array(
 * 'model' => 'Users',
 * 'message' => ':field must be unique'
 * )));
 * </code>
 * Different attribute from the field
 * <code>
 * $validator->add('username', new Existence(array(
 * 'model' => 'Users',
 * 'attribute' => 'nick'
 * )));
 * </code>
 */
class Existence extends Validator {
	
	public function validate(Validation $validation, $attribute) {
		
		$value = $validation->getValue($attribute);
		$model = $this->getOption('model');
		$except = $this->getOption("except");
		
		if (empty($model)) {
			throw new \Exception("Model must be set");
		}
		
		if (empty($attribute)) {
			throw new \Exception("arrtibute must be set");
		}
		
		if ($except) {
			$number = $model::count(sprintf($attribute . " = %s AND " . $attribute . " != %s", $value, $except));
		} else {
			$number = $model::count(sprintf($attribute . " = %s", $value));
		}
		
		if (!$number) {
			$message = $this->getOption('message');
			if (empty($message)) {
				$message = '字段对应的值不存在';
			}
		
			$validation->appendMessage(new Message($message, $attribute, "Existence"));
			return false;
		}
		
		return true;
	}

}
