<?php 
	//function query

	$conn = mysqli_connect("localhost", "root", "", "pembelian");

	function query($query){
		global $conn;

		$result = mysqli_query($conn, $query);
		$rooms = [];

		while ($room = mysqli_fetch_assoc($result)){
		$rooms[] = $room;
	}

		return  $rooms;
}

	//function Tambah
 

	function tambah($post){
		global $conn;

		$NamaCostumer			= htmlspecialchars($post["NamaCostumer"]);
		$TgglPembelian			= htmlspecialchars($post["TgglPembelian"]);
		$Nohp					= htmlspecialchars($post["Nohp"]);
		$AlamatCostumer			= htmlspecialchars($post["AlamatCostumer"]);
		$TipeMotor				= htmlspecialchars($post["TipeMotor"]);

		$Gambar = upload();

		if(!$Gambar){
			return false;
		}

		$Harga					= htmlspecialchars($post["Harga"]);

		$query = "INSERT INTO credit_motor VALUES ('', '$NamaCostumer', '$TgglPembelian', '$Nohp', '$AlamatCostumer', '$TipeMotor', '$Gambar', '$Harga')";


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

	//function upload

	function upload(){
		$namaFile 		= $_FILES['Gambar'] ['name'];
		$ukuranFile 	= $_FILES['Gambar'] ['size'];
		$error 			= $_FILES['Gambar'] ['error'];
		$tmpName 		= $_FILES['Gambar'] ['tmp_name'];

		//cek apakah tidak ada gambar yang di upload

		if($error === 4){
			echo"<script>
				alert('Pilih dulu woy Gambarnya');
				</script>";
			return false;
		}
	

	//cek apakah yang di upload gambar atau bukan

	$ekstensiGambarValid 	= ['jpg', 'jpeg', 'jfif', 'webp', 'png'];
		$ekstensiGambar 	= explode ('.', $namaFile);
			$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo"<script>
				alert('Itu Bukan Gambar Kocak -_-');
				</script>";
	}

	//cek Jika ukurannya terlalu besar

	if($ukuranFile > 10000000) {
		echo"<script>
				alert('Ukuran Gambar Terlalu Besar oyy! -_-');
				</script>";
			return false;
	}

	//Gambar siap upload
	//Generate 

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}

	//function Hapus


	function hapus($id){
		global $conn;

		mysqli_query($conn, "DELETE FROM credit_motor WHERE id = $id");

		mysqli_affected_rows($conn);
	}


	//function Ubah


	function ubah($post){
		global $conn;

		$id =$post["id"];	

		$NamaCostumer			= htmlspecialchars($post["NamaCostumer"]);
		$TgglPembelian			= htmlspecialchars($post["TgglPembelian"]);
		$Nohp					= htmlspecialchars($post["Nohp"]);
		$AlamatCostumer			= htmlspecialchars($post["AlamatCostumer"]);
		$TipeMotor				= htmlspecialchars($post["TipeMotor"]);
		$GambarLama				= htmlspecialchars($post["GambarLama"]);
		$Harga					= htmlspecialchars($post["Harga"]);

		//cek apakah user pilih gambar baru atau tidak\

		if($_FILES['Gambar'] ['error'] === 4){
			$Gambar = $GambarLama;
		} else {
			$Gambar = upload();
		}

		$query = 	"UPDATE credit_motor SET
					NamaCostumer 	= '$NamaCostumer',
					TgglPembelian 	= '$TgglPembelian',
					Nohp 			= '$Nohp',
					AlamatCostumer 	= '$AlamatCostumer',
					TipeMotor 		= '$TipeMotor',
					Gambar 			= '$Gambar',
					Harga 			= '$Harga'
					WHERE id = $id
					";


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

		//car

	function cari($keyword){
		$query = "SELECT * FROM credit_motor
				  WHERE
				  NamaCostumer 		LIKE '%$keyword%' OR
				  TgglPembelian 	LIKE '%$keyword%' OR
				  Nohp 				LIKE '%$keyword%' OR
				  AlamatCostumer 	LIKE '%$keyword%' OR
				  TipeMotor 		LIKE '%$keyword%' OR
				  Gambar 			LIKE '%$keyword%' OR
				  Harga 			LIKE '%$keyword%'";

		return query($query);
	}

		//register

	function register($post){
		global $conn;

		$username = strtolower(stripcslashes($post['username']));
		$password = mysqli_escape_string($conn,$post['password']);
		$password2 = mysqli_escape_string($conn,$post['password2']);

		$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

		if (mysqli_fetch_assoc($result)) {
			echo "
				<script>
					alert('Username Sudah Terdaftar');
				</script>";
			return false;
		}

		if($password !== $password2){
			echo "
				<script>
					alert('Password Tidak Sesuai');
				</script>
				";

			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");
		return mysqli_affected_rows($conn);
	}

	// function register($post){
	// 	global $conn;

	// 	$username 	= 	strtolower(stripcslashes($post['username']));
	// 	$password 	= 	mysqli_escape_string($conn, $post['password']);
	// 	$password2 	=	mysqli_escape_string($conn, $post['password2']);

	// 	//cek username sudah ada atau belum
	// 	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	// 	if(mysqli_fetch_assoc($result)){
	// 		echo "
	// 			<script>
	// 				alert('Username Sudah Terdaftar, Cari nama yang lain oy! -_-');
	// 			</script>";
	// 	return false;
	// 	}

	// 	//cek komfirmasi password
	// 	if($password !== $password2){
	// 		echo "
	// 			<script>
	// 				alert('passwornya kgk sesuai -_-!');
	// 			</script>";

	// 			return false;
	// 	}

	// 	//enkripsi password

	// 	$password = password_hash($password, PASSWORD_DEFAULT);

	// 	//tambahkan userbaru

	// 	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	// 	mysqli_affected_rows($conn);
	// }
 ?>