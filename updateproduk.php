<?php
	include("konek_produk.php");
	$kd= $_POST['kd'];
	$nm_prd= $_POST["nm_prd"];
	$hrg= $_POST['hrg'];
	$sql="update produk set nm_prd='$nm_prd',hrg='$hrg' where kd='$kd'";
	mysql_query($sql);
	mysql_close();
	header("location:laporan.php");
?>