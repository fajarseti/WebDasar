<?php
	include("konek_produk.php");
	$kd=$_GET['kd'];
	$sql="delete from produk where kd='$kd'";
	mysql_query($sql);
	mysql_close();
	header("location:laporan.php");
?>