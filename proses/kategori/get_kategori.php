<?php

require '../../config/config.php';

$kd = mysqli_real_escape_string($conn,$_GET['kd']);

$result = mysqli_query($conn, "SELECT * FROM tb_kategori WHERE kd_kategori = '$kd' ");
$row = mysqli_fetch_assoc($result);

echo json_encode($row);