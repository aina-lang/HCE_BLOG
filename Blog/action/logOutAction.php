<?php
if(isset($_POST['logout'])){
        session_start();
        $_SESSION=[];
        session_destroy();
        header("location: ../login.php");
}else{
    $message="marche pas";
}