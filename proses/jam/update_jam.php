<?php

require '../../config/config.php';

$kd_jam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['kd_jam']));
$jam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['jam']));

$result = mysqli_query($conn, "UPDATE tb_jam SET jam = '$jam' WHERE kd_jam = '$kd_jam' ");

header("Location: ../../admin/index.php?page=jam&msg=updated");