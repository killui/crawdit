<?php

class create-project extends Controller{

    function __construct($app, $url, $page) {
        parent::__construct();
        
        $title = "Crawd It Project";
        
        $this->View->render('create-project', $page, $title);
    }

}