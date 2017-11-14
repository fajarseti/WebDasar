<?php
	$server="localhost";
	$root="root";
	$password="cuwek1717";
	$database="a121405084";
	$koneksi=mysql_connect($server,$root,$password);
	$db=mysql_select_db($database);
	if(!$koneksi)
	{
	 echo "gagal";
	}
?>