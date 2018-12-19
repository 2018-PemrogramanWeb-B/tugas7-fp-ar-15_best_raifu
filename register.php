<?php
    include 'dbconnect.php';

    session_start();

    $rerror=" ";
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $pass2=$_POST['confirm'];

    $checkmail = mysqli_num_rows(mysqli_query($con,"SELECT * from user WHERE email='$email'"));

    if($pass!=$pass2) {
        header("location: login.php");
        $rerror="Password Tidak Sama";
    }
    if($checkmail > 0) {
        header("location: login.php");
        $rerror="Email Sudah Ada";
    }
    else {
        $con->query("INSERT INTO user VALUES ('','$name','','$email','','$pass')") ;
        header("location: login.php");
    }


?>