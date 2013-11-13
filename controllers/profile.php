<?php

class profile extends Controller{

    function __construct($app, $url) {
        parent::__construct();
        
        if(isset($url[1])){
            $id = $url[1];
            $this->getUser($id);
        }
        
        //$this->View->render('profile');
    }
    
    public function getUser($id){
        $User = new User;
        $data = $User->getUser($id);
        $this->View->profilerender('profile', $data);
    }

}