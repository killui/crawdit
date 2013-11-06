<?php

class Bootstrap {

    function __construct() {
        
        if (isset($_GET['url'])) {
            
            $url = explode('/', rtrim($_GET['url'], '/'));
            
            if($url[0] == "check"){
                $file = 'controllers/' . $url[0] . '.php';
            
                if (file_exists($file)) {
                    require $file;
                    $controller = new $url[0];
                }
            
            } else {
                $controller = new index($this,$url);
            }
            
        } else {
            $url = NULL;
            $page = new index($this, $url);
        }
    }

}