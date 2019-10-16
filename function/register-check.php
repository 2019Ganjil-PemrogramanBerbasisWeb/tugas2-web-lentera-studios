<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$userID = uniqid();

	include "../dbConnect.php";
	$newUser = "INSERT INTO user (user_id, name, email, username, password) VALUES ('$userID', '$name', '$email', '$username', '$password')";

	if ($connect->query($newUser) == TRUE) {
		echo "Pendaftaran berhasil";
	} else {
		echo "Gagal";
	}
	header("location:../");
?>