<?php 

	session_start();

	if(!isset($_SESSION['loign'])){
		header("Location : login.php");
	}


	
	require'function.php';

	//ambil data di URL
	$id = $_GET["id"];

	//Querykan data berdasarkan id
	$motor = query("SELECT * FROM credit_motor WHERE id =$id")[0];
	//var_dump($motor);

	if(isset($_POST["submit"])){

	//cek apakah data berhasil ditambahkan atau tidak

	if(ubah($_POST) > 0) {
		echo "
		<script>
			alert('Data Berhasil Diubah');
			document.location.href='index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data Gagal Diubah');
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
	<link rel="stylesheet" type="text/css" href="cscs.css">
	<title>Ubah Data Pembelian Credit Motor</title>
	<link rel="shortcut icon" href="honda.png">
</head>
<body>
 <div class="kotak-login">
  <h2>Ubah Data Pembeli</h2>
	<form action="" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?= $motor["ID"]; ?>">
		<input type="hidden" name="GambarLama" value="<?= $motor["Gambar"]; ?>">


	<!--<div class="user-box">-->
				<label class="text" for="NamaCostumer">Nama Costumer </label>
				<input class="box-form" type="text" name="NamaCostumer" id="NamaCostumer" required
				value="<?= $motor["NamaCostumer"]; ?>">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="TgglPembelian">Taggal Pembelian </label>
				<input class="box-form" type="text" name="TgglPembelian" id="TgglPembelian" required
				value="<?= $motor["TgglPembelian"]; ?>">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="Nohp">No Hp </label>
				<input class="box-form" type="text" name="Nohp" id="Nohp" required
				value="<?= $motor["Nohp"]; ?>">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="AlamatCostumer">Alamat Costumer </label>
				<input class="box-form" type="text" name="AlamatCostumer" id="AlamatCostumer" required
				value="<?= $motor["AlamatCostumer"]; ?>">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="TipeMotor">Tipe Motor </label>
				<input class="box-form" type="text" name="TipeMotor" id="TipeMotor" required
				value="<?= $motor["TipeMotor"]; ?>">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="Gambar">Gambar </label>
				<img src="img/<?php echo $motor["Gambar"];
				?>" width="90"></td>
				<input class="box-form" type="file" name="Gambar" id="Gambar">
	<!--</div>-->

	<!--<div class="user-box">-->
				<label class="text" for="Harga">Harga </label>
				<input class="box-form" type="text" name="Harga" id="Harga" required
				value="<?= $motor["Harga"]; ?>">
	<!--</div>-->

			<button class="button"type="submit" name="submit">Ubah Data</button>
			<!--<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    	</a>-->
	</form>

</div>
</body>
</html>