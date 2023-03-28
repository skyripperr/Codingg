<?php 
session_start();

	if(isset($_SESSION['login'])){
		header("Location: index.php");
		exit;
	}

	require 'function.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		//cek username

		if(mysqli_num_rows($result) === 1){

			//cek password

			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){

				//set session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit;
			}
		}

		$error = true;
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
	<?php if (isset($error)) : ?>
		<p>Username / Password Anda Salah</p>
	<?php endif; ?>
	<form method="post" action="">
		<ul>
			<li>
				<input type="text" name="username" required class="form_login" placeholder="Username">
			</li>
			<li>
				<input type="password" name="password" required class="form_login" placeholder="Password">		
			</li>
			<li>
				<button type="submit" name="submit" class="tombol_login">Login</button>
			</li>
			<li class="registrasi"><a href="registrasi.php">Buat Akun</a></li>
		</ul>
	</form>
	</div>
</body>
</html>