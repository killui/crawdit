<?php

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    public function userinsert($name, $mail, $mdp) {
        global $database;

        $query = $database->prepare('INSERT INTO users (user_name, user_email, user_password)
		values(:name, :mail, :mdp)');

        $query->bindParam(':name', $name);
        $query->bindParam(':mail', $mail);
        $query->bindParam(':mdp', md5($mdp));

        $userinsert = $query->execute();
        return $userinsert;
    }
    
    public function getAll(){
        global $database;

        $query = $database->prepare('SELECT * FROM user');
        
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    
    public function getUSer($id){
        global $database;

        $query = $database->prepare('SELECT * FROM user WHERE user_id = :id');
        
        $query->bindParam(':id', $id);
        
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

}