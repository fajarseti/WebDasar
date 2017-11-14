<html>
	<head>
		<title>Laporan</title>	
	</head>
	<body>
		<?php
		  include("konek_produk.php");		  
		  $SQL="SELECT * FROM produk order by kd asc";
		  $hasil=mysql_query($SQL);
		?>
		<h1>Laporan Data Produk</h1>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Kode</td>
				<td>Nama produk</td>
				<td>Harga</td>
				<td colspan="2">Atribut</td>			
			</tr>
			<?php
			 $no=0;
			 while($rs=mysql_fetch_array($hasil))
			 {
			 $no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rs["kd"]; ?></td>
				<td><?php echo $rs["nm_prd"]; ?></td>
				<td><?php echo $rs["hrg"]; ?></td>
				<td>
				<?php
				 echo "<td>[<a href=\"editproduk.php?kd=$rs[kd]\">Edit</a>]</td>";
				 echo "<td>[<a href=\"delete.php?kd=$rs[kd]\">Delete</a>]</td>";				 				
				?></td>
			</tr>
			<?php
			 }	
			?>	
		</table>
	</body>
</html>