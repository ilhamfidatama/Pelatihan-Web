<?php  
	include 'authentication.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username != null && $password != null) {
		auth($username, $password);
	}else{
		header('location:../index.html');
	}
?>