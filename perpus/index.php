<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
	require 'function.php';
	$pinjam = mysqli_query($conn,"SELECT * FROM buku");

    if (isset($_POST["cari"])) {
        $pinjam = cari($_POST['keyword']);
    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Perpustakaan Advent</title>
 	<link rel="stylesheet" type="text/css" href="stylesheet.css?version=<?php echo filemtime("stylesheet.css"); ?>">
 </head>
 <body>
 	<div class="header">
 		<div class="header-logo">ADV</div>
 		<div class="header-list">
 			<ul>
 				<li>Home</li>
 				<li>About</li>
 				<li>Contact Us</li>
                <li><a href="logout.php">Logout</a></li>
 			</ul>
 		</div>
 	</div>
 	<div class="main">
 		<div class="content">
 			<div class="copy-container">KOMIK</div>
            <div class="section-title">*Note: Telat Di Denda 5000/hari</div>
            <form action="" method="post">
                <input type="text" name="keyword" size="50" autofocus placeholder="Cari Buku" autocomplete="off">
                <button type="submit" name="cari">Pencarian</button>
            </form>
 			<div class="content-item">
 				<table border="1" cellspacing="0" cellpadding="10">
 					<tr>
 						<th>No.</th>
 						<th>Aksi</th>
 						<th>Gambar</th>
 						<th>Judul Buku</th>
 						<th>Identitas Peminjaman</th>
 						<th>Tanggal Peminjaman</th>
 						<th>Waktu Peminjaman</th>
 					</tr>
 					<?php $i=1; ?>
 					<?php foreach($pinjam as $row) : ?>
 					<tr>
 						<td><?php echo $i;?></td>
 						<td>
                            <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
 							<a href="hapus.php?id=<?php echo $row["id"]; ?>">Delete</a>
 						</td>
 						<td><img src="img/<?php echo $row["gambar"]; ?>" width = "250px" height="250px"></td>
 						<td><?php echo $row["nama"]; ?></td>
 						<td><?php echo $row["identitas_peminjaman"]; ?></td>
 						<td><?php echo $row["tanggal_peminjaman"]; ?></td>
 						<td><?php echo $row["waktu_peminjaman"]; ?> hari</td>
 					</tr>
 					<?php $i++; ?>
 				<?php endforeach; ?>
 				</table>
 				<h1 ><a href="tambah.php" class="tombol_login">Pinjam</a></h1>
 			</div>
 		</div>
 	</div>
    <div class="footer">
        <div class="footer-logo">©Copyright 2023 by Pakpahan</div>
    </div>
 </body>
 </html>