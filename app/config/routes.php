<?php 

//not found paths
$router->notFound(array(
		'controller' => 'global',
		'action'     => 'noPath'
));

//Remove trailing slashes automatically
$router->removeExtraSlashes(true);

$router->addResource('Account', '/account');
$router->addResource('Activity', '/activity');
$router->addResource('Bbs', '/bbs');
$router->addResource('Controller', '/controller');
$router->addResource('Fkwz', '/fkwz');
$router->addResource('Global', '/global');
$router->addResource('Index', '/index');
$router->addResource('Info', '/info');
$router->addResource('Member', '/member');
$router->addResource('News', '/news');
$router->addResource('Person', '/person');
$router->addResource('Raisefunds', '/raisefunds');
$router->addResource('Rent', '/rent');
$router->addResource('Service', '/service');

