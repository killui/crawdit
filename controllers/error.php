<?php

class error extends Controller{

    function __construct($app, $url, $page) {
        parent::__construct();
        
        $page = "index";
        
        $this->View->render('error', $page);
    }

}