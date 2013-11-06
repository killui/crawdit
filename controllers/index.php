<?php

class index extends Controller {

    function __construct($app, $url) {
        parent::__construct();
        
        $this->View->render('index');
    }

}