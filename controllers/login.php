<?php

class login {

    function __construct($app, $url, $page) {

        if (isset($_POST["email"])) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $User = new UserModel;

            $infocompte = $User->loginCheck($email, $password);

            //var_dump($infocompte);

            if ($infocompte) {

//                if ($infocompte->USER_ADMIN == 0) {
//                    header("location:index");
//                } else {

                /* if ($_POST["remember"] == "checked") {
                  setcookie("nom", $_POST['nomco'], time() + 3600 * 24 * 31);
                  setcookie("mdp", md5($_POST['mdpco']), time() + 3600 * 24 * 31);
                  } */


                $_SESSION["user_id"] = $infocompte->user_id;
                $_SESSION["user_name"] = $infocompte->user_name;
                $_SESSION["user_surname"] = $infocompte->user_surname;
                $_SESSION["user_email"] = $infocompte->user_email;
            }
        }

//        echo "session : ";
//        var_dump($_SESSION);
//        echo "post : ";
//        var_dump($_POST);
//        echo "url : ";
//        var_dump($url);
//        echo "webroot : ";
//        var_dump(WEBROOT);
//        echo "page not trimmed : ";
//        var_dump($page);
//        $page = ltrim($page, 'login');
//        echo "page trimmed : ";
//        var_dump($page);

        $page = ltrim($page, 'login');
        if ($page == "/index") {
            header("location: " . WEBROOT);
            exit();
        } else {
            $page = ltrim($page, '/');
            header("location: " . WEBROOT . $page);
            exit();
        }
    }

}