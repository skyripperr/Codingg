<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Outlet Cabang Kami</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
	<style type="text/css">
		
		*{
			scroll-behavior: smooth;
			font-family: serif;
			font-weight: bold;
			color: cyan;
		}

		body{
			margin: 0px;
		}




												/*		Header		*/




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

		.aa{
			text-decoration: none;
			color: white;
		}

		.aa:hover{
			color: green;
			transition: all .3s ease-in-out;
		}

		.li-header{
			color: white;
			float: left;
			padding: 35px 10px;
		}




													/*		Main		*/




		.main{
			background-color: #167A75;
			height: 4000px;
		}

		#view{
			font-size: 30px;
			text-decoration: none;
			list-style: none;
			position: absolute;
			display: flex;
			top: 85%;
		}

		#view:hover{
			background: rgb(29, 139, 139);
        	background: linear-gradient(90deg, rgb(29, 139, 139) 0%, rgb(29, 139, 139) 100%);
		}

		.vwbtn{
			border: none;
			font-size: 30px;
			padding: 10px 30px;
			background: rgb(29, 139, 139);
        	background: linear-gradient(90deg, rgb(29, 139, 139) 0%, rgb(29, 139, 139) 100%);
			border-radius: 10px;
		}

		.vwbtn:hover{
			background: rgb(29, 139, 139);
        	background: linear-gradient(90deg, rgb(29, 139, 139) 0%, rgb(29, 139, 139) 100%);
			color: gold;
		}




												/*		Keterangan		*/




.keterangan{
	font-family: 'Alkatra', cursive;
	font-size: 40px;
	text-align: center;
	top: 35%;
	left: 4%;
	display: flex;
	position: absolute;
	font-family: ;
	color: white;
	border-bottom: 2px solid gold;
}




												/*		Tombol View		*/




.view{
	color: white;
}





											/*		Laundry Rumah Kita		*/



		.map1{
			position: absolute;
			display: block;
			top: 153%;
			right: 13%;
		}

		.rumahkita{
			position: absolute;
			display: block;
			top: 100%;
			left: 5%;
		}

		.laundry1{
			color: white;
			font-size: 30px;
			position: absolute;
			top: 100%;
			left: 44%;
		}

		.BatamKota{
			font-size: 30px;
			position: absolute;
			top: 115%;
			left: 44%;
		}

		.senin1{
			position: absolute;
			font-size: 30px;
			top: 134.65%;
			left: 44%;
			color: gold;
		}

		.tutup1{
			position: absolute;
			font-size: 35px;
			top: 138.80%;
			left: 77.65%;
			color: red;
		}



												/*		Nagoya		*/



		.map2{
			position: absolute;
			display: block;
			top: 342%;
			left: 12%;
		}

		.laundry2{
			color: white;
			font-size: 30px;
			position: absolute;
			top: 280%;
			right: 47%;
		}

		.spark{
			position: absolute;
			display: block;
			top: 280%;
			right: 5%;
		}

		.senin2{
			position: absolute;
			font-size: 30px;
			top: 324.5%;
			left: 15%;
			color: gold;
		}

		.tutup2{
			position: absolute;
			font-size: 35px;
			top: 334%;
			right: 44%;
			color: red;
		}

		.Nagoya{
			font-size: 30px;
			position: absolute;
			top: 295%;
			right: 44%;
			text-align: right;
		}

		/*		Login		*/




.login-box form .vwbtn {
  left: 10%;
  border-radius: 5px;
  top: 68%;
  position: absolute;
  display: inline-block;
  padding: 10px 20px;
  color: cyan;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px;
  float: center;
}

.login-box .vwbtn:hover {
  background: #03e9f4;
  color: green;
  border-radius: 10px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
  float: center;
}

a{
	text-decoration: none;
	color: cyan;
}

a:hover{
	color: green;
}
	
.login-box .vwbtn span {
  position: absolute;
  display: block;
  float: center;
}

.login-box .vwbtn span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
  float: center;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box .vwbtn span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s;
  float: center;
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box .vwbtn span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s;
  float: center;
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box .vwbtn span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s;
  float: center;
}

h2{
	text-transform: uppercase;
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
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
				<li class="li-header"><a class="aa" href="Registrasi.php">Registrasi</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="index.php">Home</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="Outlet.php">Outlet</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="Produk.php">Produk</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="Pengguna.php">Pengguna</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="Transaksi.php">Transaksi</a></li>
				<li class="li-header">|</li>
				<li class="li-header"><a class="aa" href="User.php">Generate</a></li>
			</ul>

		</div>		
		</div>

	<div class="main">



										<!--		Tombol View		-->



		<form>
			<div class="login-box">
				<a id="view" href="#view">
      			<button class="vwbtn">VIEW</button></a>
			</div>
		</form>


		<p class="keterangan">KAMI JUGA MEMILIKI BEBERAPA CABANG DI KOTA BATAM ;<br>
		Batam Center (Laundry Rumah Kita), Nagoya (Sparkling Express Laundry),<br>
		Bengkong (KLINBOX Coin Laundry Bengkong).
		</p>

	<img class="rumahkita" src="../Laundry/kk/rmhkita.jpeg" width="500" height="450">
		<div class="map1">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0719564629735!2d104.03564511475379!3d1.108263799191609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989308459399b%3A0x4ed4b27f9be1f20b!2sLaundry%20Rumah%20Kita!5e0!3m2!1sen!2sid!4v1679883010647!5m2!1sen!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<p class="senin1">07.30 AM (Pagi) Sampai 18.30 PM (Malam)</p>
		<p class="tutup1">TUTUP</p>
		<p class="laundry1">Laundry Rumah Kita</p>
		<p class="BatamKota">
			Laundry kami memiliki Cabang di Batam Kota dekat <br> bank BRI,
			UNIT yang bernama LAUNDRY RUMAH KITA<br>
			Buka : - Senin - Jumat 					 : <br>
			<br>
				   - Sabtu - Minggu dan hari spesial :   
		</p>


		<br>


		<div class="map2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0270579863627!2d104.0095957147538!3d1.141112599167653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989a98a9887f3%3A0xabb0d27d15d5c74e!2sSPARKLING%20EXPRESS%20LAUNDRY!5e0!3m2!1sen!2sid!4v1679887785181!5m2!1sen!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<img class="spark" src="../Laundry/kk/sparkling.jpeg" width="500" height="450">
		<p class="Nagoya">Laundry kami memiliki Cabang di Batam Kota dekat <br> bank BRI,
			UNIT yang bernama SPARKLING EXPRESS LAUNDRY<br>
			melayani jasa Laundry dan Laundry express di Area Nagoya<br>
			Buka : - Senin - Jumat 					 : <br>
			<br>
				   - Sabtu - Minggu dan hari spesial :
		</p>
		<p class="laundry2">SPARKLING EXPRESS LAUNDRY</p>
		<p class="senin2">07.30 AM (Pagi) Sampai 18.30 PM (Malam)</p>
		<p class="tutup2">TUTUP</p>
	</div>
</body>
</html>