<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $address = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $repassword = password_hash($_POST["repassword"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO users (name, phone, email, address, password, repassword) 
            VALUES (:name, :phone, :email, :address, :password, :repassword)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":phone" => $phone,
        ":email" => $email,
        ":address" => $address,
        ":password" => $password,
        ":repassword" => $repassword
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: register.php");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <!-- Main css -->
        <link rel="stylesheet" href="register.css">
    </head>

    <body>
        <div class="container">
            <h1>Registration</h1>
                
            <form action="" id="join-us" method="POST">
                <div class="fields">
                    <span>
                        <input placeholder="Name" type="text" name="name"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Phone" type="text" name="phone"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Email" type="email" name="email"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Address" type="text" name="address"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Password" type="password" name="password"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Re-enter Password" type="password" name="repassword"/>
                    </span>
                </div>
                <p> 
                    if you have already account 
                    <a href="login.php">Click Here!</a>
                </p>
                <div class="submit">
                    <input class="submit" value="Submit" type="button" />
                </div>
            </form>
        </div>
    </body>
</html>
