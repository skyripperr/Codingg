<?php 

	require 'function.php';

	if (isset($_POST['register'])) {
		if (register($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					document.location.href = 'login.php';
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
	<title>Halaman Registrasi</title>
	<style type="text/css">
		body{
			margin: 0;
		}
		label{
			display: block;
		}
		ul li{
			list-style: none;
		}
	</style>
</head>
<body>
	<h2>Registrasi</h2>
	<form method="post" action="">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required>
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</li>
			<li>
				<label for="password2">Konfirmasi Password</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="register" name="register">Register</button>
			</li>
		</ul>
	</form>
</body>
</html>