<?php 
// session_start();
	
// 	 if($_SESSION['role']==""){
//         header("location:login.php?pesan=gagal");
    // }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produk - Succotash Laundry</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css?version=<?php echo filemtime('../css/style.css'); ?>">
</head>
<body>
	<div class="header">
		<div class="header-logo"><a href="index.php"><img src="img/laundry.png" width="120px" height="120px"></a></div>
		<div class="header-list">
			<ul>
				<li>
					<a href="registrasi.php">REGISTRASI</a> |
					<a href="outlet.php">OUTLET</a> |
					<a href="produk.php">PRODUK</a> |
					<a href="pengguna.php">PENGGUNA</a> |
					<a href="transaksi.php">TRANSAKSI</a> |
					<a href="lapor.php">GENERATE</a> |
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>
	</div>
		<div class="content">
			<table border="1" cellspacing="0" cellpadding="10">
				<tr>
					<th>No</th>
					<th>Outlet</th>
					<th>Jenis</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="Edit.php">Edit</a> |
						<a href="hapus.php">Hapus</a>
					</td>
				</tr>
			</table>
			<br>
			<div class="button">
			<a href="tambah.php" class="tambah">Tambah Data</a>
		</div>
		</div>
	<div class="footer">
		<h2>Succotash Laundry</h2>
		<p class="p">Alamat:</p>
		<p>Jalan Teratai blok V</p>
		<p class="p">Customer Care:</p>
		<p>Telp: (0274) 8889012</p>
		<p>Fax: (0274) 3405459</p>
		<p class="p">Email:</p>
		<p>info@succotashlaundry.com</p>
	</div>
</body>
</html>