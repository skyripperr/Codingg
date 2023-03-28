<?php 

	session_start();

	if(!isset($_SESSION['login'])){
		header("Location : masuk.php");
	}
	
		require'function.php';

	$motor = mysqli_query($conn, "SELECT * FROM credit_motor");

	//tombol cari di tekan
	if(isset($_POST["cari"])){

		$motor = cari($_POST["keyword"]);
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssa.css">
	<title>Website Pembelian Credit Motor Honda</title>
	<link rel="shortcut icon" href="honda.png">
</head>
<body>

	<a href="logout.php">Logout</a>

<!--ini header-->
	<div class="header">
		<div class="header-logo">
			<img src="honda.png" width="120" height="100">
			</div>
				<div class="header-list">
					<ul>
						<li>Home</li>
						<li>|</li>
						<li>Product</li>
						<li>|</li>
						<li>Promo</li>
						<li>|</li>
						<li>Dealer</li>
					</ul>
				</div>
			</div>

<!--ini main-->
		<div class="main">
			<div class="copy-container">
				<h1>Product Honda<span>.</span></h1>
			</div>

<!--ini Contains-->

		<div class="contents">

	<button class="button">
		<a href="tambah.php">Tambahkan Data Pembelian Credit</a>
	</button>

	<br></br>

	<form action="" method="post">
		<input type="text" name="keyword" size="40" 
		autofocus placeholder="Cari Apa ?" autocomplete="off">
		<button type="submit" name="cari">Searching</button>
	</form>

	<br></br>

	<table border="1" cellspacing="0" cellpadding="10">

		<tr>
			<th>NO</th>
			<th>Menu</th>
			<th>Nama Costumer</th>
			<th>Tanggal Pembelian</th>
			<th>No HP</th>
			<th>Alamat Costumer</th>
			<th>Tipe Motor</th>
			<th>Gambar</th>
			<th>Harga</th>
		</tr>

		<?php $i = 1; ?>
	
		<?php foreach ($motor as $room) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $room["ID"]; ?>">EDIT</a>
				|
				<a href="hapus.php?id=<?php echo $room["ID"]; ?>">DELETE</a> 
			</td>
			<td><?php echo $room["NamaCostumer"]; ?></td>
			<td><?php echo $room["TgglPembelian"]; ?></td>
			<td><?php echo $room["Nohp"]; ?></td>
			<td><?php echo $room["AlamatCostumer"]; ?></td>
			<td><?php echo $room["TipeMotor"]; ?></td>
			<td><img src="img/<?php echo $room["Gambar"]; ?>" width="100"></td>
			<td><?php echo $room["Harga"]; ?></td>
		</tr>

		<?php $i++; ?>
			<?php endforeach; ?>
		</table>

			<!--ini footer-->
			
	<div class="footer">
		<div class="footer-logo">
				<img src="honda.png" width="120" height="100">
		</div>
				<div class="footer-list">
					<ul>
						<li>Menu</li>
						<li>|</li>
						<li>Product</li>
						<li>|</li>
						<li>Credit</li>
				</div>
	</div>
	</body>
		</html>