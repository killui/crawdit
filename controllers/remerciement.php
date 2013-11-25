<?php

class remerciement extends Controller {

    function __construct() {
        parent::__construct();
        
        if(isset($_POST['crawd'])){
            //echo "crawded : ".$_POST['crawd'];
            $crawd = $_POST['crawd'];
            
            $this->crawdInsert($crawd);
            
        }
        
        $this->View->render('remerciement');
    }
    
    public function crawdInsert($crawd) {
        $Crawd = new CrawdModel;
        $Crawd->crawdInsert($crawd, 2, 1);
    }

}