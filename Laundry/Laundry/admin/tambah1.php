<?php 
	require '../function.php';

	if (isset($_POST['submit'])) {
		if (tambah1($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					document.location.href = 'outlet.php';
				</script>
			";
		}else{
			mysqli_error($conn);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Tambah Outlet - Succotash Laundry</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css?version=<?php echo filemtime('../css/stylesheet.css') ?>">
</head>
<body>
	<div class="kotak_login">
		<h3>Form Tambah Outlet</h3>

		<form action="" method="post">
			<ul>
				<li>
					<input type="text" name="nama" class="form_login" placeholder="Nama Lengkap" required>
				</li>
				<li>
					<input type="text" name="alamat" class="form_login" required placeholder="Alamat">
				</li>
				<li>
					<input type="text" name="tlp" class="form_login" required placeholder="Nomor Telepon">
				</li>
				<li>
					<button type="submit" name="submit" class="tombol_login">Sign Up</button>
				</li>
		</form>
	</div>
</body>
</html>