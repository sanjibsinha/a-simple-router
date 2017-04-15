<?php

include_once 'header.php';
include_once 'sidebar.php';

// we can start with heading
echo "<h1>Contact Page</h1>";

//content part starts from here
?>

<ul>
    <?php
    
    $route = [
    
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php'    
    
];
    
    foreach ($route as $router) {
        echo '<pre>';
        
        var_dump($router);
        
        echo '</pre>';
        
    }
    
    
    ?>
</ul>
<?php
include_once 'footer.php';