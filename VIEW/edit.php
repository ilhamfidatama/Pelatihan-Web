<?php  
	$nim = $_GET['nim'];
	$nama = $_GET['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body class="form">
	<form class="logout" method="POST" action="../PHP/logout.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>Edit data</h1>
	<div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../PHP/update.php">
			<label>NIM</label>
			<input type="text" name="nim" class="form_login" readonly="true" value="<?=$nim; ?>">
			<label>NAMA</label>
			<input type="text" name="nama" class="form_login" value="<?=$nama; ?>">

			<input type="submit" name="edit" class="tombol_edit" value="Edit">
		</form>
	</div>
</body>
</html>