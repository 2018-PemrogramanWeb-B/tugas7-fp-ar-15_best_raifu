<?php
include 'storedb.php';

session_start();

if(empty($_SESSION["admin"])) {
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
					<a class="nav-link" href="product_admin.php">Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about_admin.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div>
  <?php
    require 'dbconnect.php';
    $sql = 'SELECT * FROM hewan';
    $result = mysqli_query($con, $sql);
     ?>
     <table class="table table-bordered">
       <tr>
       	<th scope="col">Id</th>
       	<th scope="col">Tipe</th>
       	<th scope="col">Jenis</th>
       	<th scope="col">Harga</th>
       	<th scope="col">Deskripsi</th>
        <th scope="col">Options</th>
       </tr>
       	<?php  while($product = mysqli_fetch_object($result)) { ?>
      	<tr>
      		<td> <?php echo $product->id; ?> </td>
      		<td> <?php echo $product->tipe; ?> </td>
      		<td> <?php echo $product->jenis; ?> </td>
      		<td> <?php echo $product->harga; ?> </td>
          <td> <?php echo $product->deskripsi; ?> </td>
      		<td> <a href="edit_admin.php?id= <?php echo $product->id; ?>">Edit</a> <a> or 
			  </a> <a href="deleteproduct.php?id= <?php echo $product->id; ?>" onclick="return confirm('Are you sure to delete this item?')">Delete</a></td>
      	</tr>
		
	    <?php } ?>

		</div>

		<div>
		</div>

</body>
<a class="btn btn-primary center-block" href="addproduct.php">Add New</a>
</html>
