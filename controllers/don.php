<?php

class don extends Controller {

    function __construct() {
        parent::__construct();
        
        $this->View->render('don');
    }

}