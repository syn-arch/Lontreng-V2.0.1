<?php

require '../../config/config.php';

$nm_kategori = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nm_kategori']));

$result = mysqli_query($conn, "INSERT INTO tb_kategori VALUES('','$nm_kategori')");

header("Location: ../../admin/index.php?page=kategori&msg=added");