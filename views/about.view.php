<?php

include_once 'header.php';
include_once 'sidebar.php';

// we can start with heading
echo "<h1>About Page</h1>";

//content part starts from here
?>

<ul>
    <?php
    
    $router = [
    
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php'    
    
];
    
    foreach ($router as $route) {
        
        echo '<pre>';
        
        var_dump($route);
        
        echo '</pre>';
        
    }
    
    
    ?>
</ul>
<?php
include_once 'footer.php';