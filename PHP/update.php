<?php
	include 'database.php';

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];

	if ($nama!=null && $nim!=null) {
		$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama' WHERE nim='$nim'";

		updateData($query);

		header("location:../VIEW/tabel-data.php");
	}else{
		echo "Tolong isi dong, jangan di hapus semua!!";
	}
	
?>