<?php 
	$conn = mysqli_connect("localhost","root","","perpus");
	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
	function tambah($post){
		global $conn;
		
		$nama = htmlspecialchars($post["nama"]);
		$tanggal_peminjaman = htmlspecialchars($post["tanggal_peminjaman"]);
		$waktu_peminjaman = htmlspecialchars($post["waktu_peminjaman"]);
		$identitas_peminjaman = htmlspecialchars($post["identitas_peminjaman"]);

		$gambar = upload();

		if(!$gambar){
			return false;
		}

		$query = "INSERT INTO buku VALUES ('','$nama','$tanggal_peminjaman','$waktu_peminjaman','$identitas_peminjaman','$gambar')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
	function delete($id){
		global $conn;
		mysqli_query($conn,"DELETE FROM buku WHERE id = $id;");
		return mysqli_affected_rows($conn);
	}
	function ubah($post){
		global $conn;
		
		$id = $post["id"];

		$nama = htmlspecialchars($post["nama"]);
		$tanggal_peminjaman = htmlspecialchars($post["tanggal_peminjaman"]);
		$waktu_peminjaman = htmlspecialchars($post["waktu_peminjaman"]);
		$identitas_peminjaman = htmlspecialchars($post["identitas_peminjaman"]);
		$GambarLama = htmlspecialchars($post["GambarLama"]);

		if ($_FILES['gambar']['error'] === 4) {
			$gambar = $GambarLama;
		}else{
			$gambar = upload();
		}

		$query = "UPDATE buku SET 
					nama = '$nama',
					tanggal_peminjaman = '$tanggal_peminjaman',
					waktu_peminjaman = '$waktu_peminjaman',
					identitas_peminjaman = '$identitas_peminjaman',
					gambar = '$gambar'
					WHERE id = $id
		";
		mysqli_query($conn,$query);	
		return mysqli_affected_rows($conn);
	}
	function cari($keyword){
		global $conn;

		$query = "SELECT * FROM buku WHERE
		nama 					LIKE '%$keyword%'OR
		tanggal_peminjaman 		LIKE '%$keyword%'OR
		waktu_peminjaman 		LIKE '%$keyword%'OR
		identitas_peminjaman 	LIKE '%$keyword%'OR
		gambar 					LIKE '%$keyword%'
		";
		return query($query);
	}
	function upload()
	{
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		if($error === 4){
			echo"
				<script>
					alert('Pilih Gambar Terlebih Dahulu');
				</script>";
				return false;
		}

		$ekstensiGambarValid = ['jpg','jpeg','png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "
				<script>
					alert('Yang anda upload bukan gambar');
				</script>
			";
		}
		if ($ukuranFile > 5000000) {
			echo "
				alert('Ukuran Gambar Terlalu Besar');
			";
			return false;
		}
		$namaFileBaru = uniqid();
		$namaFileBaru .='.';
		$namaFileBaru .= $ekstensiGambar;
		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
		return $namaFileBaru;
	}
	function register($post){
		global $conn;

		$username = strtolower(stripcslashes($post["username"]));
		$password = mysqli_escape_string($conn,$post['password']);
		$password2 = mysqli_escape_string($conn,$post['password2']);

		$result = mysqli_query($conn,"SELECT username FROM register WHERE username = '$username'");

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
		mysqli_query($conn,"INSERT INTO register VALUES('','$username','$password')");
		return mysqli_affected_rows($conn);
	}
 ?>