<?php

require '../../config/config.php';

$kd_kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_kategori']));
$nm_kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nm_kategori']));

$result = mysqli_query($conn, "UPDATE tb_kategori SET nm_kategori = '$nm_kategori' WHERE kd_kategori = '$kd_kategori' ");

header("Location: ../../admin/index.php?page=kategori&msg=updated");