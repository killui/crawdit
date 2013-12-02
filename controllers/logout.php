<?php

class logout {

    function __construct($app, $url, $page) {

        $page = ltrim($page, 'logout');

        session_destroy();
        
        if($page == "/index"){
            header("location: ".WEBROOT);
            exit();
        } else {
            $page = ltrim($page, '/');
            header("location: ".WEBROOT.$page);
            exit();
        }
        
    }

}