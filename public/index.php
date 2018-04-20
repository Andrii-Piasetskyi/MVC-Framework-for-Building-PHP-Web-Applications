<?php

$request = trim($_SERVER['REQUEST_URI'], "/");

require '../vendor/core/Router.php';
require '../vendor/libs/debugFunctions.php';
require '../app/controllers/Main.php';
require '../app/controllers/Posts.php';



Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


debug(Router::getRoutes());

Router::dispatch($request);



