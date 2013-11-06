<?php

class Model {

    function __construct() {
        try {
            global $database;
            require_once 'libs/Config.php';
            //config de la base de données
            $dbtype = 'mysql';
            $dbhost = 'localhost';
            $dbname = DB_NAME;
            $dbuser = DB_USER;
            $dbpass = DB_PASS;

            $dns = $dbtype . ':host=' . $dbhost . ';dbname=' . $dbname;

            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

            $database = new PDO($dns, $dbuser, $dbpass, $options);
            //instanciation de la connexion à la BDD dans chaque constructeur des modèles qui extends la classe Model qui elle meme extends la classe Database
            
            return $database; 
            
        } catch (Exception $e) {
            echo "connection à mysql impossible : " . $e->getMessage();
            die();
        }
    }
}