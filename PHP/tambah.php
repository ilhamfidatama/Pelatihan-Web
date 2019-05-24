<?php
	include 'database.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];

	$query = "INSERT INTO mahasiswa VALUES('$nim', '$nama')";

	addData($query);

	header("location:../VIEW/tabel-data.php");
?>