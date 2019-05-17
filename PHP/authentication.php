<?php  
	include 'database.php';

	function auth($username, $password){
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = getData($query);

		if ($result != null) {
			session_start();
			$_SESSION['login'] = True; //menyimpan username pada session login
			header('location:../VIEW/tabel-data.php'); //direct ke halaman tabel_data
		}
		else{
			header('location:../index.html');
		}
	}
?>