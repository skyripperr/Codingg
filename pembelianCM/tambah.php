<?php 

	session_start();

	if(!isset($_SESSION['loign'])){
		header("Location : login.php");
	}

	
	require'function.php';

	if(isset($_POST["submit"])){

	//cek apakah data berhasil ditambahkan atau tidak

	if(tambah($_POST) > 0) {
		echo "
		<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href='index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data Gagal Ditambahkan');
			document.location.href='index.php';
		</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cccs.css">
	<title>Tambah Data Pembelian Credit Motor</title>
	<link rel="shortcut icon" href="honda.png">
</head>
<body>
 <!--<div class="login-box">-->
 	<div class="kotak-login">
  <h2>Tambahkan Data Pembeli</h2>

	<form action="" method="post" enctype="multipart/form-data">

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="NamaCostumer">Nama Costumer </label>
				<input type="text" name="NamaCostumer" id="NamaCostumer" class="box-form" required>
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="TgglPembelian">Taggal Pembelian </label>
				<input type="text" name="TgglPembelian" id="TgglPembelian" class="box-form" required>
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="Nohp">No Hp </label>
				<input type="text" name="Nohp" id="Nohp" required class="box-form">
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="AlamatCostumer">Alamat Costumer </label>
				<input type="text" name="AlamatCostumer" id="AlamatCostumer" class="box-form" required>
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="TipeMotor">Tipe Motor </label>
				<input type="text" name="TipeMotor" id="TipeMotor" class="box-form" required>
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="Gambar">Gambar </label>
				<input type="file" name="Gambar" id="Gambar" class="box-form">
			</li>
	<!--</div>-->

	<!--<div class="user-box">-->
			<li>
				<label class="text" for="Harga">Harga</label>
				<input type="text" name="Harga" id="Harga" class="box-form" required>
			</li>
    <!--</div>-->

			<button class="button" type="submit" name="submit">Submit</button>
			<!--<a href="#">	
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    	</a>-->
		</div>

</form>
	</div>
		</body>
			</html>