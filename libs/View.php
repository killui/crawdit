<?php

class View {

    function __construct() {
        
    }
    
    public function render($view){
        require 'views/'.$view.'.php';
    }
    
}