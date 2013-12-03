<?php

class index extends Controller {

    function __construct() {
        parent::__construct();
        
        //require('index.html');
        $page = "index";
        $title = "Crawd It";
        $this->View->render('index', $page, $title);
    }

}