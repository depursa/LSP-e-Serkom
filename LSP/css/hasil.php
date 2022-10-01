<?php
error_reporting(0);
include 'conf/koneksi.php';
?>
<h2 align="center">TABEL HASIL PEMESANAN</h2>
<table border="1" width="100%" align="center">
	<caption>
		<form method="POST">
			<input type="text" name="kata" size="40">
			<input type="submit" name="cari" value="search!">
		</form>
	</caption>
	<th width="7%">Nama</th>
	<th width="14%">Tempat Wisata</th>
	<th width="7%">Lokasi Wisata</th>
	<th width="10%">Kota Wisata</th>
	<th width="7%">Total Harga</th>
	
<?php
	echo "<tr>";
	echo "<td align='center'>".$row[0]."</td>";
	echo "<td>".$nama."</td>";
	echo "<td>".$tempatwisata."</td>";
	echo "<td>".$lokasi."</td>";
	echo "<td>".$tempat."</td>";
	echo "<td>".$row[9]."</td>";
	echo "<td align='center'>
		<a href='index.php?id=$row[0]'>Kembali</a> |
	echo "</tr>";
}
?>
</table>