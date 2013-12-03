<?php

class View {

    function __construct() {
        
    }
    
    public function indexRender($view){
        require 'views/header.php';
        require 'views/'.$view.'.php';
        require 'views/footer.php';
    }
    
    public function render($view, $page, $title){
        require 'views/header.php';
        require 'views/'.$view.'.php';
        require 'views/footer.php';
    }
    
    public function profileRender($view, $data){
        require 'views/'.$view.'.php';
    }
    
    public function projectRender($view, $title, $page, $project, $perks, $ressources, $genres){
        require 'views/header.php';
        require 'views/'.$view.'.php';
        require 'views/footer.php';
    }
    
}