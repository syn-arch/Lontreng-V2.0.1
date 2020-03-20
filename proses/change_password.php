<?php 

require '../config/config.php';

$pw_lama = mysqli_real_escape_string($conn, $_POST['pw_lama']);
$pw1 = mysqli_real_escape_string($conn, $_POST['pw1']);
$pw2 = mysqli_real_escape_string($conn, $_POST['pw2']);

if ($pw1 != $pw2) {
	header("Location: ../admin/index.php?page=ubah password&msg=not_match");
}

$id = $_SESSION['kd_user'];
$pw_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$id' "))['password'];

if (md5($pw_lama) != $pw_user) {
	header("Location: ../admin/index.php?page=ubah password&msg=old_pw_wrong");
}

$new = md5($pw1);
$result = mysqli_query($conn, "UPDATE tb_user SET password = '$new' WHERE id = $id ");

if ($result) {
	header("Location: ../admin/index.php?page=ubah password&msg=updated");
}