<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "404shop";

$con = new mysqli($host,$user,$pass,$db);

$link='';
		if(isset($_GET['link'])) {
			$link=$_GET['link'];
		}

		if($link=='Kucing') {
			$sql = "SELECT id,tipe, jenis, harga, deskripsi, foto FROM hewan WHERE tipe='Cat'";	
		}
		else if($link=='Anjing') {
			$sql = "SELECT id,tipe, jenis, harga, deskripsi, foto FROM hewan WHERE tipe='Dog'";	
		}
		else if($link=='Hamster') {
			$sql = "SELECT id,tipe, jenis, harga, deskripsi, foto FROM hewan WHERE tipe='Hamster'";	
		}
		else{
			$sql = "SELECT id,tipe, jenis, harga, deskripsi, foto FROM hewan";
		}

?>