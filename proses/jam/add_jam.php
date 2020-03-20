<?php

require '../../config/config.php';

$jam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['jam']));

$result = mysqli_query($conn, "INSERT INTO tb_jam VALUES('','$jam')");

header("Location: ../../admin/index.php?page=jam&msg=added");