<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <!-- Main css -->
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="container">
            <h1>Log In Now :)</h1>

            <?php
	             if(isset($_GET['pesan'])){
		               if($_GET['pesan'] == "gagal"){
			                  echo "Login gagal! username dan password salah!";
		               }
                   else if($_GET['pesan'] == "logout"){
			                  echo "Anda telah berhasil logout";
		               }
                   else if($_GET['pesan'] == "belum_login"){
			                  echo "Anda harus login untuk mengakses halaman admin";
		               }
	             }
	          ?>

            <form action="" id="join-us" method="POST">
                <div class="fields">
                    <span>
                        <input placeholder="Email" type="email" name="email"/>
                    </span>
                    <br />
                    <span>
                        <input placeholder="Password" type="password" name="password"/>
                    </span>
                </div>
                <p>
                    if you have already account
                    <a href="register.php">Click Here!</a>
                </p>
                <div class="submit">
                    <input class="submit" value="Submit" type="button" />
                </div>
            </form>
        </div>
    </body>
</html>
