<?php
require "database/database.php";
if(!isset($_SESSION['auth'])){       
    if(isset($_POST["connecter"])){
        if(empty($_POST["email"]) || empty($_POST["password"])){
            $message="veuillez completer tout les champs svp";
        }else{
            $email=$_POST["email"];
            $mdp=$_POST["password"];
            $ifUserExist=$bdd->prepare('SELECT email FROM users WHERE email=?');
            $ifUserExist->execute(array($email));
            if($ifUserExist->rowCount()>0){
                $userInfos=$bdd->prepare("SELECT * FROM users WHERE email=?");
                $userInfos->execute(array($email));
                $userMdp=$userInfos->fetch();
                if(password_verify($mdp,$userMdp["mdp"])){
                    $_SESSION['auth']=true;
                    $_SESSION['email']=$userMdp['email'];
                    header("location:html/index_forum.php");
                }else{
                    $message="mot de passe incorrecte";
                } 
            }else{$message="vous n'avez pas de compte ,veuillez vous inscrire";}
        }
    }
}else{
    header("location:html/index_forum.php");
}