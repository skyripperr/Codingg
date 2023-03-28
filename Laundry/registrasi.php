<?php
require'function.php';

if(isset($_POST["submit"])){

//cek apakah data berhasil ditambahkan atau tidak

if(tambah($_POST) > 0) {
echo "
<script>
alert('Data Berhasil Ditambahkan');
document.location.href='login.php';
</script>
";
} else {
echo "
<script>
alert('Data Gagal Ditambahkan');
document.location.href='registrasi.php';
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
	<link rel="stylesheet" type="text/css" href="cccs.css">
	<title>Tambah Data Pembelian Credit Motor</title>

	<style type="text/css">
		html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background-color: #0B8881;
}

.login-box {
  position: absolute;
  top: 45%;
  left: 50%;
  width: 400px;
  padding: 55.50px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: cyan;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: cyan;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid gold;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
  color: cyan;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: green;
  font-size: 12px;
}

.button1{
  background: rgba(0,0,0,.5);
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  background-color: #04514C;
  border: none;
}

.back{
  background: rgba(0,0,0,.5);
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  background-color: #04514C;
  border: none;
}



										/*		Login		*/




.login-box form .button1 {
  left: 13%;
  border-radius: 5px;
  top: 77%;
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

.login-box .button1:hover {
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
	
.login-box .button1 span {
  position: absolute;
  display: block;
  float: center;
}

.login-box .button1 span:nth-child(1) {
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

.login-box .button1 span:nth-child(2) {
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

.login-box .button1 span:nth-child(3) {
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

.login-box .button1 span:nth-child(4) {
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




											/*		Back		*/



.login-box form .back {
  left: 61%;
  border-radius: 5px;
  top: 77%;
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

.login-box .back:hover {
  background: #03e9f4;
  color: green;
  border-radius: 10px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
  float: center;
}

.login-box .back span {
  position: absolute;
  display: block;
  float: center;
}

.login-box .back span:nth-child(1) {
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

.login-box .back span:nth-child(2) {
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

.login-box .back span:nth-child(3) {
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

.login-box .registrasi span:nth-child(4) {
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

<div class="login-box">
<h2>Registrasi</h2>
<form action="" method="post">

<div class="user-box">
      	<input type="text" name="Nama" id="Nama" class="box-form" required>
      	<label class="text" for="Nama">Nama</label>
</div>

<div class="user-box">
      	<input type="text" name="id_outlet" id="id_outlet" class="box-form" required>
      	<label class="text" for="id_outlet">ID Outlet</label>
</div>

<div class="user-box">
      	<input type="text" name="role" id="role" class="box-form" required>
      	<label class="text" for="role">Role</label>
</div>

<div class="user-box">
      	<input type="text" name="Password" id="Password" class="box-form" required>
      	<label class="text" for="Password">Password</label>
</div>

<button class="button1" type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Login
</button>


	<a class="back" href="login.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Back
     </a>


</form>
	</div>
		</body>
			</html>