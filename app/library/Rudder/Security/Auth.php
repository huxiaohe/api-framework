<?php
/**
 * Created by PhpStorm.
 * User: wliu
 * Date: 14-9-14
 * Time: 下午8:57
 */

namespace Rudder\Security;


interface Auth {

    public function getId();

    public function getName();
} 