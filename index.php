<?php

// bootstrapping or setting up the project

require 'core/bootstrap.php';

$router = new Router();

// require 'core/router.php';

require RequireRouter::router();
//$uri = trim($_SERVER['REQUEST_URI'], '/');
//
//require $router->direct($uri);

//
//require 'core/router.php';

// require $router->direct(Request::uri());
$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);
