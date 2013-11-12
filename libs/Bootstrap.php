<?php

class Bootstrap {

    function __construct() {
        
        if (isset($_GET['url'])) {
            
            $url = explode('/', rtrim($_GET['url'], '/'));
            print_r($url);
            
            $file = "controllers/".$url.".php";
            if (file_exists($file)){
                
                $controller = new $url[0];
            } else {
                $controller = new error;
            }
            
            
        } else {
            $page = new index;
        }
    }

}