<?php

require '../../config/config.php';

$kd_kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_kategori']));
$kd_audio = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_audio']));
$kd_jam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_jam']));
$hari = htmlspecialchars(mysqli_real_escape_string($conn, $_GET['hari']));

$result = mysqli_query($conn, "INSERT INTO tb_jadwal VALUES('','$kd_kategori','$kd_audio','$kd_jam','$hari')");

header("Location: ../../admin/index.php?page=jadwal&hari=".$hari."&msg=added");