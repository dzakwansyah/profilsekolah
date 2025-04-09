<?php
	$server   = "localhost";
	$database = "dbdaffadj";
	$username = "root";
	$password = "";

	$koneksi = mysqli_connect($server,$username,$password,$database);

	if (!$koneksi){
		die("Koneksi database Gagal".mysql_connect_error());
	}

?>