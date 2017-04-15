<?php


$router->define([
    "" => "controllers/index.php",
    "about" => "controllers/about.php",
    "contact" => "controllers/contact.php",
    "database" => "controllers/database.php",
    "name" => "controllers/add-name.php"    
]);

//$router->get('', 'controllers/index.php');
//$router->get('about', 'controllers/about.php');
//$router->get('contact', 'controllers/contact.php');
//$router->get('database', 'controllers/database.php');
//$router->post('name', 'controllers/add-name.php');


//echo '<pre>';
//var_dump($router->routes);
//echo '</pre>';