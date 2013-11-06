<?php

class user extends Model {

    function __construct() {
        parent::__construct();
    }
    
    public function getAll(){
        global $database;

        $query = $database->prepare('SELECT * FROM user');
        
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

}