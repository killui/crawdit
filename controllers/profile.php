<?php

class profile extends Controller{

    function __construct($app, $url) {
        parent::__construct();
        
        if(isset($url[1])){
            
            $user = $url[1];
            $this->getUser($user);
            
        } else {
            
            //$this->View->render('error');
            
        }
        
    }
    
    public function getUser($user) {
        $User = new UserModel;
        //$data = $User->getUser($user);
        $data = $User->verif_log($user);
        $this->View->profileRender('profile',$data);

    }

}