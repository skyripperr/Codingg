<?php
session_start();

	require 'function.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

		$cek = mysqli_num_rows($result);

		if ($cek > 0) {
			$data = mysqli_fetch_assoc($result);

			if ($data['role'] == 'admin') {
				$_SESSION['username'] = $username;
				$_SESSION['role'] = 'admin';
				header('location:../admin/index.php');
			}elseif($data['role'] == 'kasir'){
				$_SESSION['username'] = $username;
				$_SESSION['role'] = 'kasir';
				header('location:../kasir/index.php');
			}elseif ($data['role'] == 'owner') {
				$_SESSION['username'] = $username;
				$_SESSION['role'] = 'owner';
				header('location:../owner/index.php');
			}else{
				header('location:login.php?pesan=gagal');
			}
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css') ?>">
</head>
<body>
	<div class="kotak_login">
	<h3>Form Login</h3>
	<form method="post" action="">
		<ul>
			<li>
				<input type="text" name="username" required class="form_login" placeholder="Username">
			</li>
			<li>
				<input type="password" name="password" required class="form_login" placeholder="Password">		
			</li>
			<li>
				<button type="submit" name="login" class="tombol_login">Login</button>
			</li>
		</ul>
	</form>
	</div>
</body>
</html>