<?php

class error extends Controller{

    function __construct() {
        parent::__construct();
        
        $this->View->render('error');
    }

}