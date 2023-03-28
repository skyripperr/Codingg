<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
	require 'function.php';
	$id = $_GET["id"];

	$pinjam = query("SELECT * FROM buku WHERE id = $id")[0];
	if (isset($_POST['submit'])) {
		if (ubah($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'index.php';
				</script
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Diubah');
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
 	<title>Ubah Data</title>
 	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css'); ?>">
 </head>
 <body>
 	<div class="kotak_login">
 	<h2 class="tulisan_login">Ubah Data</h2>
 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?php echo $pinjam["id"]; ?>">
 		<input type="hidden" name="GambarLama" value="<?php echo $pinjam["gambar"]; ?>">
 		<ul>
 			<li>
 				<label for="nama">Nama</label>
 				<input type="text" name="nama" id="nama" class = "form_login" required value="<?php echo $pinjam["nama"]; ?>">
 			</li>

 			<li>
 				<label for="tanggal_peminjaman">Tanggal Peminjaman</label>
 				<input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form_login "required value="<?php echo $pinjam["tanggal_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="waktu_peminjaman">Waktu Peminjaman</label>
 				<input type="text" name="waktu_peminjaman" id="waktu_peminjaman" class="form_login "required value="<?php echo $pinjam["waktu_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="identitas_peminjaman">Identitas Peminjam</label>
 				<input type="text" name="identitas_peminjaman" id="identitas_peminjaman" class="form_login "required value="<?php echo $pinjam["identitas_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="gambar">Gambar</label>
 				<img src="img/<?php echo $pinjam["gambar"]; ?>" width="90px"><br>
 				<input type="file" name="gambar" id="gambar" class="form_login">
 			</li>
 			<br></br>
 			<li>
 				<button type="submit" name="submit" class="tombol_login">Ubah Data</button>
 			</li>
 		</ul>
 	</form>
 	</div>
 </body>
 </html>