<?php

class project extends Controller{

    function __construct($app, $url, $page) {
        parent::__construct();
        
        $title = "Crawd It Project";
        
        $this->View->render('project', $page, $title);
    }

}