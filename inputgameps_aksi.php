<?php
require 'koneksi.php';

if (isset($_POST['kirim'])) {
	$id = $_POST['id'];
	$nm = $_POST['fnama'];
	$em = $_POST['femail'];
	$jm = $_POST['fjumlah'];
	$gm = $_POST['fgame'];
	$gg = $_POST['fgg'];
	$tg = $_POST['ftgl'];
	$ig = $_POST['fig'];



	$tbh = mysqli_query($koneksi,"INSERT INTO gameps VALUES ('$id','$nm','$em','$jm','$gm','$gg','$tg','$ig')");

	if (!$tbh) {
		echo "GAGAL";
	} else {
		echo "BERHASIL";
	}

}

//$query  = "INSERT INTO bukutamu VALUES ('$id','$nm','$em','$jm','$gm','$gg','$tgl','$ig')";
//$result = mysqli_query($koneksi, $query);

?>