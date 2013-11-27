<?php

class View {

    function __construct() {
        
    }
    
    public function render($view){
        require 'views/'.$view.'.php';
    }
    
    public function profileRender($view, $data){
        require 'views/'.$view.'.php';
    }
    
    public function projectRender($view, $project, $perks, $ressources, $genres){
        require 'views/'.$view.'.php';
    }
    
}