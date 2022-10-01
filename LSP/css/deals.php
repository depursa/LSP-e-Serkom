<!DOCTYPE html>
<?php  
include 'conf/koneksi.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


	<title>WoOx Travel - Form Pemesanan Tiket Wisata</title>
</head>
<body>

  <!-- ***** Memulai Area Header ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="active">Beranda</a></li>
                        <li><a href="about.php">Tentang</a></li>
                        <li><a href="deals.php">Pemesanan</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<br>
<h2 align="center">Form Pemesanan</h2>
<br>
<table border="0" align="center" width="50%">
	<form method="POST">
	<tr>
			<td width="80%">Nama Lengkap</td>
			<td width="80%"> <input type="text" name="nama" size="40" required=""><br><br></td>
		</tr>
		<tr>
			<td width="80%">No Indentitas</td>
			<td width="80%"> <input type="text" name="noiden" size="40" required=""><br><br></td>
		</tr>
		<tr>
			<td width="80%">No. Hp</td>
			<td width="80%"> <input type="text" name="hp" size="40" required=""><br><br></td>
		</tr>
		<tr>
			<td width="80%">Tempat Wisata</td>
			<td width="80%">
			<select name="tempatwisata" id="tempatwisata" onchange="changeValue(this.value)">
			<option>---Pilih Tempat Wisata---</option>
					<?php 
							$query = mysqli_query($konek, "SELECT * FROM tempatwisata");
							$jsArray = "var dttempatwisata = new Array();\n";
							while ($row = mysqli_fetch_array($query)) {
							echo '<option value="' . $row['tempatwisata'] . '">' . $row['tempatwisata'] . '</option>';    
							$jsArray .= "dttempatwisata['" . $row['tempatwisata'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";
									}
						?>
          </select>
			</td>
		</tr>
		<tr>
			<td width="80%">Tanggal Kunjungan</td>
			<td width="80%"> <input type="date" name="tanggalkunjungan" size="40" required=""><br><br></td>
		</tr>
		<tr>
			<td width="80%">Pengunjung Dewasa</td>
			<td width="80%"> <input type="text" name="pengunjungdewasa" id="dewasa" size="40" required="" onkeyup="sum();"><br><br></td>
		</tr>
		<tr>
			<td width="80%">Pengunjung Anak - anak
			<br><b><span> usia di bawah 12 tahun</span></b>
			</td>
			<td width="80%"> <input type="text" name="pengunjunganak" size="40" id="anak" required="" onkeyup="sum();"><br><br></td>
		</tr>
		<tr>
			<td width="80%">Harga Tiket</td>
			<td width="80%">Rp. <input type="text" name="harga" id="harga" size="20" required="" value="<?php echo $row['harga'] ?>" onkeyup="sum();" readonly>
			</td>
		</tr>
		<tr>
			<td width="80%">Total Bayar</td>
			<td width="80%">Rp. <input type="text" id="total" name="total" size="20" required="" readonly><br><br></td>
		</tr>
		<table border = "0" align="center" width="45%">
		<tr>
		<td>
		<span><input type="checkbox" id="cek" required=""> Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</span>
	</td>
	</tr>
	<tr>
	<center>
		<td align="center"><button type="submit" name="simpan" value="Pesan Tiket">Pesan Tiket</button>&nbsp;<button type="submit" name="cancel" value="Cancel" onclick="javascript:window.location='form.php';">Cancel</button></td>
		</center>
		</tr>
	</table>
	</form>
</table>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Wisata WoOx</a> || Devara All rights reserved. 
          <br>Desain <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>

<?php
if(isset($_POST['simpan']))
{
	$nama=$_POST['nama'];
	$noiden=$_POST['noiden'];
	$hp=$_POST['hp'];
	$tempatwisata=$_POST['tempatwisata'];
	$tanggalkunjungan=$_POST['tanggalkunjungan'];
	$pengunjungdewasa=$_POST['pengunjungdewasa'];
	$pengunjunganak=$_POST['pengunjunganak'];
	$harga=$_POST['harga'];
	$total=$_POST['total'];
	$sql="INSERT into tiket (nama, noiden, hp, tempatwisata, tanggalkunjungan, pengunjungdewasa, pengunjunganak, harga, total) values ('$nama','$noiden','$hp', '$tempatwisata', '$tanggalkunjungan', $pengunjungdewasa, $pengunjunganak, $harga, $total)";
	$hasil=mysqli_query($konek,$sql);
	if($hasil)
	{
		echo "<script language='JavaScript'>
		(window.alert('Form berhasil tersimpan'))
		location.href='form.php'
		</script>";
	}
	else
	{
		echo "<script language='JavaScript'>
		(window.alert('Maaf, form tidak dapat disimpan'))
		location.href='form.php'
		</script>";
	}
}
?>
<script language="JavaScript" type="text/javascript">
<?php echo $jsArray; ?>  
          function changeValue(tempatwisata){
          console.log(dttempatwisata);  
          document.getElementById('harga').value = dttempatwisata[tempatwisata]['harga'];
		  };
		  
		  function sum(){
          var a = document.getElementById('dewasa').value;
          var b = document.getElementById('anak').value;
          var result = parseInt(a) + parseInt(b);
		  var result2 = result * parseInt(document.getElementById('harga').value);
          if (b > 0){
			  var result3 = result2 * 0.5; 
		  }else{
				var result3 = result2;
		  }
		  if (!isNaN(result3)) {
             document.getElementById('total').value = result3;
          }
          }
		</script>
		<script>
		if(#cek == 0 ){
			echo"silahkan setuju dahulu";
		}else{
		}
		</script>
		
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>