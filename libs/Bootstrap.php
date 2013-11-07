<?php

class Bootstrap {

    function __construct() {
        
        if (isset($_GET['url'])) {
            
            $url = explode('/', rtrim($_GET['url'], '/'));
            print_r($url);
            
            $file = "controllers/".$url.".php";
            if (!file_exists($file)){
                $controller = new error;
            } else {
                $controller = new $url[0];
            }
            
            
        } else {
            $page = new index;
        }
    }

}