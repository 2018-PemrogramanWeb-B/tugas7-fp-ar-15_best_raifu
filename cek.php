<?php
    include 'dbconnect.php';

    session_start();
 
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="SELECT email,katakunci FROM user WHERE email='$email' AND katakunci='$pass'";
    $check=$con->query($sql);
    $row=$check->fetch_assoc();

    if(empty($row)) {
        header("location: login.php");
    }
    else {
        $_SESSION["user"]=$email;
        header("location: logged_in.php");        
    }
?>