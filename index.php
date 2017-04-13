<?php

// bootstrapping or setting up the project

require 'core/bootstrap.php';

$router = new Router();

// require 'core/router.php';

require RequireRouter::router();
//$uri = trim($_SERVER['REQUEST_URI'], '/');
//
//require $router->direct($uri);


$router = Router::load('router.php');



require $router->direct(Request::uri());

