<?php

namespace Rudder;

use Phalcon\Validation;
use Phalcon\Validation\Message;
use Phalcon\Validation\Message\Group;

class MyValidation extends Validation {

	/**
	 * 验证执行之前执行
	 *
	 * @param array $data
	 * @param object $entity
	 * @param Phalcon\Validation\Message\Group $messages
	 * @return bool
	 */
	public function beforeValidation($data, $entity, $messages) {
	}
	
	/**
	 * 验证之后执行
	 *
	 * @param array $data
	 * @param object $entity
	 * @param Phalcon\Validation\Message\Group $messages
	 */
	public function afterValidation($data, $entity, \Phalcon\Validation\Message\Group $messages) {

	}
}