<?php 
include 'storedb.php';

session_start();

if(empty($_SESSION["user"])) {
   header('location: storepage.php');
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device=width, intial-scaled=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="#"><img src="aset/img/404.png" style="width:40px" alt="logo" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="storepage.php">Store</a>
				</li>
				<li class="navbar-nav">
					<a class="nav-link" href="userpageawal.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
        <br>
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6 mb-4">
            <form action="sukses.php" method="post">
                <div class="card">
                    <br>
                    <div class="col-sm-6">
                        <h6>Detil Pembayaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-14">
                            <label for="fullname"><h6>Full name (on the card)</h6></label>
                            <input class="form-control" type="text" placeholder="Full name" required="required">
                        </div>
                        <div class="col-sm-14">
                            <label for="card number"><h6>Card Number</h6></label>
                            <input class="form-control" type="number" placeholder="Card Number" required="required">
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                              <label for="expiration date"><h6>Expiration Date</h6></label>
                              <div class="input-group">
                                <input type="number" class="form-control" placeholder="MM" required="required">
                                <input type="number" class="form-control" placeholder="YY" required="required">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <label for="expiration date"><h6>CVV</h6></label>
                              <input type="password" class="form-control" placeholder="CVV" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="col-sm-12">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Bayar</button>
                    </div>
                    </div>
              	</form>
            </div>
		</div>
	</div>

</body>
</html> 