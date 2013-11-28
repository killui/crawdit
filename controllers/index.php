<?php

class index extends Controller {

    function __construct() {
        parent::__construct();
        
        require('index.html');
        //$this->View->render('index');
    }

}