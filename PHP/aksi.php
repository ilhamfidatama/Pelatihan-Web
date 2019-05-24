<?php 
	include 'database.php';
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	
	if (isset($_POST['edit'])) {
		header("location:../VIEW/edit.php?nim=$nim&nama=$nama");

	}else if (isset($_POST['hapus'])) {
		$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
		deleteData($query);

		header("location:../VIEW/tabel-data.php");
	}
?>