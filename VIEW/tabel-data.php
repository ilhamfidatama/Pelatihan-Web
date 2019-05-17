<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/table-style.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<form class="logout" method="POST" action="">
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
		<tr>
			<td>1</td>
			<td>F1D017001</td>
			<td>ALEX</td>
			<td>
				<form class="formSiswa" method="POST" action="">
					<input type="text" name="nim" hidden="true" value="">
					<input type="text" name=" nama" hidden="true" value="">
					<input type="submit" name="edit" class="blue" value="Edit">
					<input type="submit" name="hapus" class="red" value="Hapus">
				</form>
			</td>
		</tr>
	</table>

	<form class="kotak" action="tambah.html">
		<input type="submit" name="tambah" class="blue" value="Tambah Data Siswa">
	</form>
	

</body>
</html>