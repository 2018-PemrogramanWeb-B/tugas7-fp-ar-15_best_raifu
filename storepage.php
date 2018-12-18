<?php 
include 'storedb.php';
include 'session.php';
   
if(isset($_SESSION["user"])) {
    header("location: logged_in.php");
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
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
    <br>
    <div class="row">

		<div class="col-lg-3 ">
			<h1 class="my-4">Pilih Hewan Kesukaan</h1>
			<div class="list-group">
				<a href="?link=Kucing" class="list-group-item">Kucing</a>
				<a href="?link=Anjing" class="list-group-item">Anjing</a>
				<a href="?link=Hamster" class="list-group-item">Hamster</a>
			</div>
		</div>

		<div class="col-lg-6">
            <div class="row">

		<?php 

		$link=''; 	
		
        $table=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($table)) {
				$id=$row['id'];
                $jenis=$row["jenis"];
                $tipe=$row["tipe"];
                $harga=$row["harga"];
                $deskripsi=$row["deskripsi"];
                $foto=$row["foto"];
        echo  '			
			    <div class="col-lg-4 col-md-6 mb-4 tofil" id='.$tipe.'>
					<div class="card h-100">
						<a href="#"><img class="card-img-top" src="'.$foto.'" alt="barang dijual" /></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="?'.$jenis.'">'.$jenis.'</a>
							</h4>
							<h5>'.$harga.'</h5>
							<p class="card-text">
								'.$deskripsi.'
							</p>
						</div>
					</div>
				</div>
            ';
        }
        ?>

            </div>
        </div>
        
	   	<div class="col-lg-3">
	   		<div class="jumbotron">Selamat Datang, Silahkan <a href="login.php">Masuk </a>Terlebih Dahulu</div>
	   	</div>
    </div>
	</div>
</body>
</html>

