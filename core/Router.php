<?php

class Router {
    
    /*
     * Now we can register routes for get and post requests
     * there are also patch request and others
     */
    
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    


    
    /*
     * this can load any file and return the router object
     * 
     */
    
    public static function load($file) {
        
        $router = new static;
        
        require $file;
        
        return $router;
        
    }
    
    /*
     * we define the routes here. here $routes is an array.
     * so that we can use the key and value pair for further use
     */


    public function define($routes) {
        
        $this->routes = $routes;
        
    }
    
    /*
     * this will get the get request and it sends specific uri 
     * to the controller accordingly. 
     */
    
    public function get($uri, $controller) {
        
        $this->routes['GET'][$uri] = $controller;       
        
    }
    
    /*
     * this will get the post request and it sends specific uri 
     * to the controller accordingly. 
     */
    
    public function post($uri, $controller) {
        
        $this->routes['POST'][$uri] = $controller;       
        
    }
    
    
    /*
     * once defined, the router object will direct the URI to the 
     * specific routes. we have used array_key_exists method to match them 
     * from the previous files and returning the URI
     */
    
    public function direct($uri) {

        
        if (array_key_exists($uri, $this->routes)) {
            
            return $this->routes[$uri];            
            
        }
        
        throw new Exception('No routes defined');
        
    }
    
    
}
