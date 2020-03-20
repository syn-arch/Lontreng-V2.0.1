<?php

require '../../config/config.php';

$kd_audio = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_audio']));
$nm_audio = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nm_audio']));
$audioLama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['audio']));

if ($_FILES["file_audio"]["name"]) {
	$audio = uniqid() . '.mp3';
	move_uploaded_file($_FILES['file_audio']['tmp_name'], '../../assets/audio/' . $audio);
	unlink("../../assets/audio/" . $audioLama);
}else{
	$audio = $audioLama;
}

$result = mysqli_query($conn, "UPDATE tb_audio SET nm_audio = '$nm_audio', audio = '$audio' WHERE kd_audio = '$kd_audio' ");

header("Location: ../../admin/index.php?page=audio&msg=updated");