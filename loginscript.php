<?php
session_start();
$error=$user=$password='';

    if(isset($_POST['email'])){
        $user=$_POST['email'];
        $password=$_POST['key'];
    }

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if($user!='#' || $password!='#') {
        $error='Invalid email or password';
    }
    else {
        $_SESSION['login']=$user;
        header("location: logged_in.php");
    }
}
?>