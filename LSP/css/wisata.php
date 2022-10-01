<!DOCTYPE html>
<?php  
include 'conf/koneksi.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Pemesanan Tiket Wisata</title>
</head>
<body>
<br>
<h2 align="center">Form Tambah Tempat Wisata</h2>
<br>
<table border="0" align="center" width="45%">
	<form method="POST">
	<tr>
			<td width="80%">Nama Wisata</td>
			<td width="80%"> <input type="text" name="tempatwisata" size="40" required=""></td>
		</tr>
		<tr>
			<td width="80%">Lokasi Wisata</td>
			<td width="80%"> <input type="text" name="lokasi" size="40" required=""></td>
		</tr>
		<tr>
			<td width="80%">Daerah Wisata (kota)</td>
			<td width="80%"> <input type="text" name="tempat" size="40" required=""></td>
		</tr>
		<!--<tr>
			<td width="80%">Foto Wisata (*jpg, *jpeg, *png)</td>
			<td width="80%"> <input type="file" name="foto" size="40" required=""></td>
		</tr>-->
		<tr>
			<td width="80%">Harga</td>
			<td width="80%"> <input type="text" name="harga" size="40" required=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td width="80%"><button type="submit" name="simpan" value="Ok">OK</button></td>
		</tr>
	</form>
</table>
<?php
if(isset($_POST['simpan']))
{
	$tempatwisata=$_POST['tempatwisata'];
	$lokasi=$_POST['lokasi'];
	$tempat=$_POST['tempat'];
	$harga=$_POST['harga'];
	$foto = $_FILES['foto']['name'];
	$source = $_FILES['foto']['tmp_name'];
	$folder = '../assets/img/';
	
	move_uploaded_file($source, $folder.$foto);
	
	$sql="INSERT into tempatwisata (tempatwisata, harga, lokasi, tempat, foto) values ('$tempatwisata', $harga, '$lokasi', '$tempat', '$foto')";
	$hasil=mysqli_query($konek,$sql);
	if($hasil)
	{
		echo "<script language='JavaScript'>
		(window.alert('berhasil tersimpan'))
		location.href='wisata.php'
		</script>";
	}
	else
	{
		echo "<script language='JavaScript'>
		(window.alert('Maaf, tidak dapat disimpan'))
		location.href='wisata.php'
		</script>";
	}
}
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>