<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "404shop";

$con= new mysqli($host,$user,$pass);

if($con->select_db($db)==false) {
	$sql = "CREATE DATABASE $db";

	$con = new mysqli($host,$user,$pass,$db);

	if($con->query("CREATE TABLE hewan (
				id int(11) AUTO_INCREMENT PRIMARY KEY,
				tipe varchar(25),
				jenis varchar(25),
				harga varchar(25),
				deskripsi text,
				foto varchar(200) ")===TRUE ) {
						
				}

	if($con->query("CREATE TABLE user (
				id int(11) AUTO_INCREMENT PRIMARY KEY,
				username varchar(25) NOT NULL,
				displayname varchar(50),
				phone varchar(13),
				email varchar(50),
				address text,
				password varchar(30) NOT NULL") === TRUE ) {
					
				}

	if($con->query("INSERT INTO hewan (tipe,jenis,harga,deskripsi,foto) VALUES ('Dog','Homete!!!!','Rp 900.000,-','Homete!!! Master!!!','aset/img/homete.jpg')")===TRUE) {
		
	}
	if($con->query("INSERT INTO hewan (tipe,jenis,harga,deskripsi,foto) VALUES ('Hamster','Hamtaro','Rp 350.000,-','Hamataro Yang Imut Suka Makan Biji Bunga Matahari','aset/img/HamtaroN.png')")===TRUE) {
		
	}
	if($con->query("INSERT INTO hewan (tipe,jenis,harga,deskripsi,foto) VALUES ('Dog','Looder Homete??','Rp 850.000,-','Masta-san, lemme paint u','aset/img/art.jpg')")===TRUE) {
		
	}
}

else $con = new mysqli($host,$user,$pass,$db);

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