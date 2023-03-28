<?php 
require'function.php';

	//register
	if(isset($_POST["register"])){

		if(register($_POST)> 0){
			echo "
		<script>
			alert('User Berhasil Ditambahkan');
		</script>
		";
	} else {
		mysqli_error($conn);
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Regristasi</title>
	<style>
		label{
			display: block;
		}

		li{
			list-style: none;
			text-decoration: none;
		}

		h2{
			position: absolute;
			top: 5%;
			left: 46%;
		}

		form{
			position: absolute;
			top: 15%;
			left: 40%;
		}
	</style>
</head>
<body>
	<h2>Regristasi</h2>
		<form action="" method="post">
			<ul>
				<li>
					<label for="username">UserName</label>
					<input type="text" name="username" id="username">
				</li>

				<li>
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
				</li>

				<li>
					<label for="password2">Konfirmasi Password</label>
					<input type="password" name="password2" id="password2">
				</li>

				<button type="register" name="register">Register</button>
			</ul>
		</form>
</body>
</html>