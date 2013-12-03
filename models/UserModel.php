<?php

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function loginCheck($email, $mdp)
        {
            global $database;

            $query = $database->prepare('SELECT * FROM user WHERE user_email = :email AND user_password = :mdp');

            $query->bindParam(':email', $email);
            $query->bindParam(':mdp', $mdp);
            
            $query->execute();
            $nbrligne = $query->rowCount();
            
            if ($nbrligne == 1) 
            {   
                $infocompte = $query->fetch(PDO::FETCH_OBJ);    
                return $infocompte;
            }
        }
    
    public function userInsert($name, $mail, $mdp, $freelance, $manager) {
        global $database;

        $query = $database->prepare('INSERT INTO user (user_name, user_email, user_password, user_freelance, user_manager)
		values(:name, :mail, :mdp, :freelance, :manager)');

        $query->bindParam(':name', $name);
        $query->bindParam(':mail', $mail);
        $query->bindParam(':mdp', md5($mdp));
        $query->bindParam(':freelance', $freelance);
        $query->bindParam(':manager', $manager);

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