<?php

$router = new AltoRouter();

$router->map('GET', '/', 'App\HomeController@index');

\System\Registry::set('router', $router);