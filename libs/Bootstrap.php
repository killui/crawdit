<?php

class Bootstrap {

    function __construct() {
        
        if (isset($_GET['url'])) {
            
            $url = explode('/', rtrim($_GET['url'], '/'));
            print_r($url);
            
            
        } else {
            $page = new index;
        }
    }

}