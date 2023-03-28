<?php 
// session_start();
	
// 	 if($_SESSION['role']==""){
//         header("location:../login.php?pesan=gagal");
//     }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laundry</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css?version=<?php echo filemtime('../css/style.css'); ?>">
</head>
<body>
	<div class="header">
		<div class="header-logo"><a href="index.php"><img src="img/laundry.png" width="120px" height="120px"></a></div>
		<div class="header-list">
			<ul>
				<li>
					<a href="lapor.php">GENERATE</a> |
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main">
		<img src="img/laundry1.jpg" width="100%" height="500px">
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