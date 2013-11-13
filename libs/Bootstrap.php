<?php

class Bootstrap {

    function __construct() {
        
        if (isset($_GET['url'])) {
            
            $url = explode('/', rtrim($_GET['url'], '/'));
            print_r($url);
            
            $file = "controllers/".$url[0].".php";

            if (file_exists($file)){
                require $file;
                $controller = new $url[0]($this, $url);
            } else {
                $controller = new error;
            }
            
            
        } else {
            $page = new index;
        }
    }

}