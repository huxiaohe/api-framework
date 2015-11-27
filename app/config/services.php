<?php 

/**
 * Services are globally registered in this file
 *
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Router\Annotations as Router;
use Phalcon\Mvc\Model\Manager as modelsManager;
use Phalcon\Cache\Backend\Redis;
use Phalcon\Cache\Frontend\Data;
// use Phalcon\Session\Adapter\Redis as SessionAdapter;

use Rudder\Session\Adapter\Redis as SessionAdapter;
// use Rudder\Session\Adapter\Redis as SessionAdapter;
use Rudder\Mvc\DispatchIntercept;
use Rudder\Sms\YmSmsService;
use Rudder\Utils\FileLog as logger;
use Rudder\Db\Listener as DbListener;
use Rudder\Mvc\Router\Listener as RouteListener;
use Rudder\MyValidation as Validation;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () use($config) {
	$url = new UrlResolver();
	$url->setBaseUri($config->application->baseUri);
	return $url;
});

$di->setShared('router', function() use ($di) {
    //Use the annotations router
    $router = new Router(false);

    //Read the resources from file
    require __DIR__ . '/routes.php';
    
    // 路由事件拦截器
    $eventsManager = $di->getShared('eventsManager');
    $eventsManager->attach('router', new RouteListener(new logger('roter.log')));
    $router->setEventsManager($eventsManager);
    
    return $router;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
});

$di->set('dispatcher', function () use ($di) {
	
	$eventsManager = $di->getShared('eventsManager');
	$dispatcher = new Dispatcher();
	//调度控制器事件拦截器
	$dispatchIntercept = new DispatchIntercept($di);
	$eventsManager->attach('dispatch', $dispatchIntercept);
	
	$dispatcher->setEventsManager($eventsManager);
	
	return $dispatcher;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use ($config, $di) {
    $dbConfig = $config->database->toArray();
    $adapter = $dbConfig['adapter'];
    unset($dbConfig['adapter']);

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $adapter;
	$connection = new $class($dbConfig);
	
	// 记录数据日志
	$dbListener = new DbListener(new logger('db.log'));
	
	$eventsManager = $di->getShared('eventsManager');
	$eventsManager->attach('db', $dbListener);
	$connection->setEventsManager($eventsManager);
	return $connection;
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
	
	return new MetaDataAdapter();
});

/**
 * Registering the modelsManager service
 */
$di->setShared('modelsManager', function () {
	
// 	$eventsManager = $this->getShared('eventsManager');
	
// 	// Attach an anonymous function as a listener for "model" events
// 	$eventsManager->attach('model', function($event, $model){
// 			//Catch events produced by the Robots model
// 			if (get_class($model) == 'Robots') {
// 				if ($event->getType() == 'beforeSave') {
// 					if ($model->name == 'Scooby Doo') {
// 						echo "Scooby Doo isn't a robot!";
// 						return false;
// 					}
// 				}
// 			}
// 			return true;
// 		});
		//Setting a default EventsManager
	$modelsManager = new ModelsManager();
// 	$modelsManager->setEventsManager($eventsManager);
	return $modelsManager;
});

$di->setShared('modelsCache', function() use ($config) {
	$frontCache = new Data(array(
			'lifetime' => 86400
	));
	$redisConfig = $config->redis->toArray();
	$modelsCache = new Redis($frontCache, $redisConfig);
	
	return $modelsCache;
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('session', function () use ($config) {
	$redisConfig = $config->redis->toArray();
    $session = new SessionAdapter($redisConfig);
	$session->setName('YKSID');
    $session->start();
	
    return $session;
});

/**
 * Sms service
 */
$di->setShared('sms', function() use ($config) {
	$smsConfig = $config->sms->toArray();
	return new YmSmsService($smsConfig);
});

/**
 * 日志记录
 */
$di->setShared('app_log', function() {
	return new logger('app.log');
});

/**
 * 
 */
$di->set('validation', function() {
	$validation = new Validation();
	return $validation;
});
