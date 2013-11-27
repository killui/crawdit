<?php

if (isset($_POST["nomco"])) {
    $veriflog = new UserModel;

    $infocompte = $veriflog->verif_log($_POST['nomco'], $_POST['mdpco']);

    if ($infocompte) {
        /*

          if($infocompte->USER_ADMIN == 0)
          {
          header("location:index");
          }


          else
          {

          if ($_POST["remember"]=="checked")
          {
          setcookie("nom",$_POST['nomco'],time()+3600*24*31);
          setcookie("mdp",md5($_POST['mdpco']),time()+3600*24*31);

          }
         */

        session_start();

        $_SESSION["user_name"] = $infocompte->user_name;
        $_SESSION["user_mail"] = $infocompte->user_mail;
        $_SESSION["user_password"] = $infocompte->user_password;
        $_SESSION["user_freelance"] = $infocompte->user_freelance;




        header("location:project");
    } else {
        header("location:don");
    }
}
?>
					
