<?php
	include("konek_produk.php");
	$kode=$_POST['kd'];
	$namaproduk=$_POST['nm_prd'];
	$harga=$_POST['hrg'];
	$sql="insert into produk values('$kode','$namaproduk','$harga')";
	mysql_query($sql);
	mysql_close();
	header("location:inpproduk.php");
?>