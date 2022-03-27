<?php

use AutoRoute\AutoRoute;

require __DIR__ . '/vendor/autoload.php';

$autoRoute = new AutoRoute(
    'AutoRoute\Http',
    __DIR__ . '/tests/Http/',
    method: 'onGet'

);

$router = $autoRoute->getRouter();
$route = $router->route('GET', '/foo-item/1/edit');
var_dump($route->class);
var_dump($route->arguments);
//var_dump($router);
