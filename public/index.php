<?php

$request = trim($_SERVER['REQUEST_URI'], "/");

require '../vendor/core/Router.php';
require '../vendor/libs/debugFunctions.php';

Router::add('posts/add', ['controller'=>'Posts', 'action'=>'add']);
Router::add('posts', ['controller'=>'Posts', 'action'=>'index']);
Router::add('', ['controller'=>'Main', 'action'=>'index']);


debug(Router::getRoutes());

if(Router::matchRoute($request))
{
    debug(Router::getRoute());
}
else
{
    echo '404';
}

echo "<br>".$request."</br>";



