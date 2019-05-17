<?php  
	include '../PHP/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/table-style.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<?php
		include '../PHP/mahasiswa.php';

		$data = getDataMahasiswa();
	?>
	<form class="logout" method="POST" action="../PHP/keluar.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>tabel data</h1>
	<table class="table1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Aksi</th>
		</tr>
		<?php $no = 1; while ($mahasiswa = mysqli_fetch_assoc($data)) : ?>
		<tr>
			<td><?=$no; ?></td>
			<td><?=$mahasiswa['nim'] ?></td>
			<td><?=$mahasiswa['nama'] ?></td>
			<td>
				<form class="formSiswa" method="POST" action="../PHP/aksi-data-mahasiswa.php">
					<input type="text" name="nim" hidden="true" value="<?=$mahasiswa['nim'] ?>">
					<input type="text" name=" nama" hidden="true" value="<?=$mahasiswa['nama'] ?>">
					<input type="submit" name="edit" class="blue" value="Edit">
					<input type="submit" name="hapus" class="red" value="Hapus">
				</form>
				<!-- <a href="edit.html" class="blue">Edit</a> &ensp;
				<a href="" class="red">Hapus</a> -->
			</td>
		</tr>
		<?php $no++; ?>
	<?php endwhile; ?>

	</table>

	<form class="kotak" action="tambah.html">
		<input type="submit" name="tambah" class="blue" value="Tambah Data Siswa">
	</form>
	

</body>
</html>