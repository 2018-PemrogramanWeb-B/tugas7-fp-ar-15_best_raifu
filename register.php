<?php
    include 'dbconnect.php';

    session_start();

    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $confirm=$_POST['password2'];

    $checkmail = mysqli_num_rows(mysqli_query($con,"SELECT * from user WHERE email='$email'"));

    if($pass != $confirm) {
        $_SESSION['msg']="Password Tidak Sama";
        header("location: login.php");
    }
    else if($checkmail > 0) {
        $_SESSION['msg']="Email Sudah Ada";
        header("location: login.php");
    }
    else {
        $con->query("INSERT INTO user VALUES ('','$name','','$email','','$pass')") ;
        $_SESSION['msg']='Registrasi Berhasil';
        header("location: login.php");
    }


?>