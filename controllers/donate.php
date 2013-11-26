<?php

class donate extends Controller {

    function __construct() {
        parent::__construct();
        
        $this->View->render('don');
    }

}