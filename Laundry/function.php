<?php 
	//function query

	$conn = mysqli_connect("localhost", "root", "", "laundry");

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

		$NamaPemesan	= htmlspecialchars($post["NamaPemesan"]);
		$Alamat			= htmlspecialchars($post["Alamat"]);
		$TipeBaju		= htmlspecialchars($post["TipeBaju"]);
		$NoTelp			= htmlspecialchars($post["NoTelp"]);

		$query = "INSERT INTO pesan VALUES ('', '$NamaPemesan', '$Alamat', '$TipeBaju', '$NoTelp')";


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}