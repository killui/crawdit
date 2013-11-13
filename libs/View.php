<?php

class View {

    function __construct() {
        
    }
    
    public function render($view){
        require 'views/'.$view.'.php';
    }
    
    public function profilerender($view, $data){
        require 'views/'.$view.'.php';
    }
    
}