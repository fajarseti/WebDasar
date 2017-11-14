<html>
<head>
<title>Edit Data Produk</title>
</head>

<body>
<?php
	include("konek_produk.php");
	$kd=$_GET['kd'];
	$sql="SELECT * FROM produk where kd='$kd'";
	$hasil=mysql_query($sql);
	$rs=mysql_fetch_array($hasil);
?>

<form action="updateproduk.php" method="post" enctype="multipart/form-data" name="inpproduk">
<table width="604" border="1">
  <tr>
    <td colspan="3" bgcolor="#FF0000"><div align="center" class="style1">EDIT  DATA PRODUK</div></td>
    </tr>
  <tr>
    <td colspan="2">Kode</td>
    <td width="378"><label>
      <input name="kd" type="text" id="kd" value="<?php echo $rs["kd"]; ?>" size="5" maxlength="5" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2">Nama Produk</td>
    <td><label>
      <input name="nm_prd" type="text" id="nm_prd" value="<?php echo $rs["nm_prd"]; ?>" size="35" maxlength="35" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2">Harga</td>
    <td><label>
      <input name="hrg" type="text" id="hrg" value="<?php echo $rs["hrg"]; ?>" size="12" maxlength="12" />
    </label></td>
  </tr>
  <tr>
    <td width="209"><label>
      <input type="submit" name="submit" id="submit" value="Simpan"/>
    </label></td>
    <td colspan="2"><label></label></td>
    </tr>
</table>
</form>

</body>
</html>