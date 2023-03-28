<?php 
session_start();

if (isset($_SESSION['login'])) {
	header("Location: index.php");
	exit;
}

	require 'function.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($conn,"SELECT * FROM register WHERE username = '$username'");

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				$_SESSION['login'] = true;
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
</head>
<body>
	<h1>Halaman Login</h1>

	<?php if(isset($error)) : ?>
	<?php endif; ?>

	<form action="" method="post">
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
				<button type="submit" name="login">Login</button>
			</li>
			<li>
				<a href="registrasi.php">Buat Akun Baru</a>
			</li>
		</ul>
	</form>
</body>
</html>