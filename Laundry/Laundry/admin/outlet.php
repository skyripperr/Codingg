<?php

require 'function.php'; 
// session_start();
	
// 	 if($_SESSION['role']==""){
//         header("location:login.php?pesan=gagal");
    // }

$outlet = mysqli_query($conn,"SELECT * FROM outlet");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Outlet - Succotash Laundry</title>
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
			<div class="button1">
				<a href="tambah1.php" class="tambah">Tambah Outlet</a>
			</div>
			<table border="1" cellspacing="0" cellpadding="10">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telpon</th>
					<th>Aksi</th>
				</tr>
				<?php $i = 1; ?>
				<?php foreach($outlet as $row) : ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['tlp']; ?></td>
[22.49, 27/3/2023] Suryadi: <td>
						<a href="edit1.php?id=<?php echo $row["id"]; ?>">Edit</a> |
						<a href="hapus.php?id=<?php echo $row["id"]; ?>">Hapus</a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
			</table>
			<br>
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