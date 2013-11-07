<?php

class index extends Controller {

    function __construct() {
        parent::__construct();
        
        $this->View->render('index');
    }

}