<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\Container;

// Routeur sans injection de dépendance
//$router = new Router();

// Routeur avec injection de dépendance
$container = new Container();
$router =  $container->getService('core.router');

$routerInfos = $router->getRoute();

// Instanciation du contrôleur sans l'injection de dépendance
//$controllerName = "App\\Controller\\" . $routerInfos['controller'];
//$controller = new $controllerName();

// Instanciation avec injection de dépendance
$controller = $container->getService($routerInfos['controller']);
$controller->{$routerInfos['method']}($routerInfos['uriVars']);

