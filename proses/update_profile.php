<?php 

require '../config/config.php';

$nm_user = mysqli_real_escape_string($conn, $_POST['nm_user']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$kd_user = $_SESSION['kd_user'];

$result = mysqli_query($conn, "UPDATE tb_user SET nm_user = '$nm_user', email = '$email' WHERE id = $kd_user ");

if ($result) {
	header("Location: ../admin/index.php?page=profile saya&msg=updated");
}