<?php

class search extends Controller {

    function __construct() {
        parent::__construct();
        
        $this->View->render('search');
    }

}