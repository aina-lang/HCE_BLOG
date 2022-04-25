<?php
require "../database/database.php";

if(isset($_POST["signup"])){
    if (empty($_POST["fullName"]) || empty($_POST["email"]) || empty($_POST["password"])|| empty($_POST["passwordConfirm"])) {
        $message="Veuillez completer tous les champs svp";
    }else{
        $fullName=htmlSpecialChars($_POST["fullName"]);
        $email=htmlSpecialChars($_POST["email"]);
        $password=$_POST["password"];
        $passwordConfirm=$_POST["passwordConfirm"];
        $ifUserExist=$bdd->prepare('SELECT email FROM users WHERE email=?');
        $ifUserExist->execute(array($email));
        if ($ifUserExist->rowCount()==0) {
           if ($password==$passwordConfirm) {
                $insertUser=$bdd->prepare('INSERT INTO users(fullName,email,mdp)VALUES(?,?,?)');
                $insertUser->execute(array($fullName,$email,password_hash($_POST["password"],PASSWORD_DEFAULT)));
                $_SESSION['auth']=true;
                $_SESSION['email']=$email;
                header("location:index_forum.php");
            }else{
               $messagePass="le message que vous avez  saisi ne correspond pas au precedent";
           }
        }else{
            $message="cet email est deja utiliser a un autre compte";
        }
        
    }
}