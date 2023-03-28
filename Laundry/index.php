

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="1indexcss.css">
	<title>Laundry</title>
	<style type="text/css">

		*{
			scroll-behavior: smooth;
			font-family: sans-serif;
		}

		body{
			margin: 0px;
		}

		.header {
			height : 125px;
			background-color: #1EABA3;
			width: 100%; 
			position: fixed;  
			z-index: 100;
		}

		.header-logo {
			position: absolute;
			float : left;
		}

		.ul-header{
			float: right;
			list-style: none;
			padding: 0px 50px;
		}

		a{
			text-decoration: none;
			color: white;
		}

		a:hover{
			color: green;
			transition: all .3s ease-in-out;
		}

		.li-header{
			color: white;
			float: left;
			padding: 35px 10px;
		}

		.main{
			height: 820px;
			background-image: url('backgroundLR.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}

		.pesan{
			position: absolute;
			top: 95%;
			right: 5%;
			border: none;
			background-color: #FAC405;
			font-size: 35px;
			padding: 20px 40px;
			border-radius: 20px;
		}

		.pesan:hover{
			opacity: 2;
			cursor: default;
			color: green;
			background-color: #1EABA3;
		}

		.namalr{
			position: absolute;
			top: 25%;
			left: 5%;
			color: white;
			font-size: 45px;
			font-weight: bold;
		}

		.moto{
			position: absolute;
			top: 43%;
			left: 5%;
			color: white;
			font-size: 30px;
		}

		.footer{
			height: 195px;
			background-color: #2CC1B9;
		}

		.text{
			font-family: serif;
			font-weight: bold;
			color: white;
			position: absolute;
			display: flex;
			top: 118%;
			left: 40%;
			text-align: center;
			font-size: 33px;
		}

		.tentangkami{
			font-family: serif;
			color: white;
			position: absolute;
			display: flex;
			top: 125%;
			left: 26%;
			text-align: center;
			font-size: 27px;
		}
	</style>
	<link rel="shortcut icon" href="ll2.png">
</head>
<body>
	<div class="header">
		<div class="header-logo">
			<img src="ll2.png" width="300" height="125"></a>
		</div>
		<div class="header-list">

			<ul class="ul-header">
				<li class="li-header"><a href="Registrasi.php">Registrasi</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a href="Outlet.php">Outlet</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a href="Produk.php">Produk</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a href="Pengguna.php">Pengguna</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a href="Transaksi.php">Transaksi</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a href="User.php">Generate</a></li>
			</ul>

		</div>		
		</div>


	<div class="main">
				<br></br>
				<br></br>
				<br></br>
				<br></br>
				<br></br>
				<div class="moto">|The Best Laundry All Time</div>
				<div class="namalr">WEBSITE<br>
				LAUNDROMAT
				</div>

				<a href="pesan.php"><button class="pesan">Pesan</button></a>
			</div>
	
	</div>

		</div>

	<div class="footer">

		<div class="text">
			|Tentang Kami|
		</div>
		
		<div class="tentangkami">
			Kami Menyediakan Jasa Laundry dengan lengkap,<br>
			biaya murah, mesin yang berkualitas, Laundry Wangy<br>
			dan rapi, bisa memesan dengan online atapun offline<br>
			(datang ke Landry Kami). 
		</div>	
	
	</div>

</body>
</html>