<?php

require '../config/config.php';

if (!isset($_POST['email'])) {
	header("Location: ../login.php");
	exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));

$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'");

if ($result->num_rows > 0) {

	$user = mysqli_fetch_assoc($result);

	$_SESSION['login'] = true;
	$_SESSION['kd_user'] = $user['id'];
	$_SESSION['nm_user'] = $user['nm_user'];
	$_SESSION['level'] = $user['level'];

	$data['status'] = "ok";
	$data['message'] = "Login berhasil";

	echo json_encode($data);
}else{
	$data['status'] = "error";
	$data['message'] = "Email atau password anda salah";

	echo json_encode($data);
}