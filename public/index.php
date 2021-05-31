<?php

require '../vendor/autoload.php'; 
/**
 * calling global .env variables
 */
require_once __DIR__. '/../App/Config/_env.php';

$router = new Core\Router();
new \Core\Model();

//$router->add('', ['controller' => 'Home', 'action' => 'Admin','namespace'=>'Admin']);
$router->add('', ['controller' => 'Home', 'action' => 'home','namespace'=>'Auth']);
$router->add('{controller}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);
$router->add('admin/{controller}/{id:\d+}/{action}',['namespace'=>'Admin']);
$router->add('{controller}/{action}',['namespace'=>'Auth']);
$router->add('doctor/{controller}/{action}',['namespace'=>'doctor']);

// echo '<p>';
// getenv('APP_URL');

//  echo '</p>';
 $router->dispatch($_SERVER['QUERY_STRING']);
//var_dump($router->getRoutes()); 
//var_dump($router->getParams()); 


?>