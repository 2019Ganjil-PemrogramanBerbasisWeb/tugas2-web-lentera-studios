<?php
	$name = addslashes(trim($_POST['name']));
	$email = addslashes(trim($_POST['email']));
	$username = addslashes(trim($_POST['username']));
	$password = md5(addslashes(trim($_POST['password'])));
	$userID = addslashes(trim(uniqid();

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
