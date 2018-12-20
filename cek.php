<?php
    include 'dbconnect.php';

    session_start();
 
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM user WHERE email='$email' AND katakunci='$pass'";
    $check=$con->query($sql);
    $row=$check->fetch_assoc();

    if(empty($row)) {
        $_SESSION['msg']="Email atau Password Salah";
        header("location: login.php");
    }
    else {
        if($row['akses'] == true ) {
            $_SESSION["admin"]=$email;
            header("location: product_admin.php");
        }
        else{
            $_SESSION["user"]=$email;
            header("location: logged_in.php");
        }
                
    }
?>