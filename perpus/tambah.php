<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
	require 'function.php';

	if (isset($_POST['submit'])) {
		if (tambah($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					document.location.href = 'index.php';
				</script
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Ditambahkan');
					document.location.href = 'index.php';
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
 	<title>Peminjaman</title>
 	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css'); ?>">
 </head>
 <body>
 	<div class="kotak_login">
 	<h2 class="tulisan_login">Pinjam Buku</h2>
 	<form action="" method="post" enctype="multipart/form-data">
 		<ul>
 			<li>
 				<label for="nama">Nama</label>
 				<input type="text" name="nama" id="nama" required class="form_login">
 			</li>

 			<li>
 				<label for="tanggal_peminjaman">Tanggal Peminjaman</label>
 				<input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" required class="form_login">
 			</li>
 			<li>
 				<label for="waktu_peminjaman">Waktu Peminjaman</label>
 				<input type="text" name="waktu_peminjaman" id="waktu_peminjaman" required class="form_login">
 			</li>
 			<li>
 				<label for="identitas_peminjaman">Identitas Peminjam</label>
 				<input type="text" name="identitas_peminjaman" id="identitas_peminjaman" required class="form_login">
 			</li>
 			<li>
 				<label for="gambar">Gambar</label>
 				<input type="file" name="gambar" id="gambar" required>
 			</li>
 			<br></br>
 			<li>
 				<button type="submit" name="submit" class="tombol_login">Tambah Data</button>
 			</li>
 		</ul>
 	</form>
 	</div>
 </body>
 </html>