<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$userID = uniqid();

	include "../tugas2-web-lentera-studios/dbConnect.php";
	$newUser = "INSERT INTO user (user_id, name, email, username, password) VALUES ('$userID', '$name', '$email', '$username', '$password')";

	if($name == "") header("location:../tugas2-web-lentera-studios/register.php?register=Failed&blank=Name");
	if($email == "") header("location:../tugas2-web-lentera-studios/register.php?register=Failed&blank=Email");
	if($username == "") header("location:../tugas2-web-lentera-studios/register.php?register=Failed&blank=Username");
	if($password == "") header("location:../tugas2-web-lentera-studios/register.php?register=Failed&blank=Password");

	if ($connect->query($newUser) == TRUE) {
		echo "Pendaftaran berhasil";
	} else {
		echo "Gagal";
	}
	header("location:../tugas2-web-lentera-studios/");
?>