<?php
	session_start();
	include "database.php";

	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = mysqli_query($connect, "SELECT * FROM petugas WHERE username = '$username'&& password = '$password'") or die (mysqli_error($connect));

	$cek = mysqli_num_rows($query);

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:home.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
?>