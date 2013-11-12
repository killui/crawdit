<?php

class project extends Controller{

    function __construct() {
        parent::__construct();
        
        $this->View->render('project');
    }

}