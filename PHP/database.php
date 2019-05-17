<?php  
	include 'koneksi-database.php';

	function addData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
	}

	function updateData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
	}

	function getData($query){
		global $conn;
		$result = mysqli_query($conn, $query);

		$data = mysqli_fetch_assoc($result);

		return $data;
	}

	function deleteData($query){
		global $conn;
		$result = mysqli_query($conn, $query);
	}
?>