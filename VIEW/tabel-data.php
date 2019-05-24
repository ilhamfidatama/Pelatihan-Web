<?php  
	include '../PHP/session.php';
	include '../PHP/database.php';

	$query = "SELECT * FROM mahasiswa";

	$result = getData($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/table-style.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<form class="logout" method="POST" action="../PHP/logout.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>TABEL DATA</h1>
	<table class="table1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Aksi</th>
		</tr>
		<?php while ($data = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['nim'] ?></td>
			<td>
				<form class="formSiswa" method="POST" action="../PHP/aksi.php">
					<input type="text" name="nim" hidden="true" value="<?=$data['nim']?>">
					<input type="text" name=" nama" hidden="true" value="<?= $data['nama'] ?>">
					<input type="submit" name="edit" class="blue" value="Edit">
					<input type="submit" name="hapus" class="red" value="Hapus">
				</form>
			</td>
		</tr>
		<?php endwhile ; ?>
	</table>

	<form class="kotak" action="tambah.html">
		<input type="submit" name="tambah" class="blue" value="Tambah Data Siswa">
	</form>
	

</body>
</html>