<?php

class profile {

    function __construct() {
        parent::__construct();
        
        $this->View->render('profile');
    }

}