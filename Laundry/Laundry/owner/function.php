<?php 
	$conn = mysqli_connect("localhost","root","","pra_ukk");

	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		};
		return $rows;
	}

	function register($post){
		global $conn;

		$nama = htmlspecialchars($post['nama']);
		$alamat = htmlspecialchars($post['alamat']);
		$jenis_kelamin = htmlspecialchars($post['jenis_kelamin']);
		$tlp = htmlspecialchars($post['tlp']);

		$query = "INSERT INTO member VALUES('','$nama','$alamat','$jenis_kelamin','$tlp')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}

	function tambah1($post){
		global $conn;

		$nama = htmlspecialchars($post['nama']);
		$alamat = htmlspecialchars($post['alamat']);
		$tlp = htmlspecialchars($post['tlp']);

		$query = "INSERT INTO outlet VALUES('','$nama','$alamat','$tlp')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
	function edit1($post){
		global $conn;

		$nama = htmlspecialchars($post['nama']);
		$alamat = htmlspecialchars($post['alamat']);
		$tlp = htmlspecialchars($post['tlp']);

		$query = "UPDATE outlet SET
					nama = '$nama',
					alamat = '$alamat',
					tlp = '$tlp'
					WHERE id = $id
		";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
?>