<?php

require '../../config/config.php';

$kd_jadwal = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_jadwal']));
$kd_kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_kategori']));
$kd_audio = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_audio']));
$kd_jam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_jam']));
$hari = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['hari']));

$result = mysqli_query($conn, "UPDATE tb_jadwal 
								SET 
								kd_kategori = '$kd_kategori', 
								kd_audio = '$kd_audio', 
								kd_jam = '$kd_jam' 
								WHERE kd_jadwal = '$kd_jadwal' ");

header("Location: ../../admin/index.php?page=jadwal&hari=".$hari."&msg=updated");