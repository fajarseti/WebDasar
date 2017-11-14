<html>
	<head>
		<title>Input Data Produk</title>	
	</head>
	<body>
		<form action="save_produk.php" method="post" name="produk">
		<table border="1">
			<tr>
				<td colspan="2" align="center" bgcolor="red">INPUT DATA PRODUK</td>
			</tr>
			<tr>
				<td>KODE</td>
				<td>
					<input type="text" name="kd" id="kd" size="17"></td>
			</tr>
			<tr>
				<td>NAMA PRODUK</td>
				<td>
					<input type="text" name="nm_prd" id="nm_prd" size="35"></td>
			</tr>
			<tr>
				<td>HARGA</td>
				<td>
					<input type="text" name="hrg" id="hrg" size="20"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="reset" value="reset"></td>
			</tr>		
		</table>
		<?php
		 include("gridprd.php");
		?>
		</form>	
	</body>
</html>