<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {

	/**
	 * Read the constant
	 */
	require APP_PATH . "/app/config/constant.php";
	
    /**
     * Read the configuration
     */
    require APP_PATH . "/app/config/config.php";

    /**
     * Read auto-loader
     */
    require APP_PATH . "/app/config/loader.php";

    /**
     * Read services
     */
    require APP_PATH . "/app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage();
}
