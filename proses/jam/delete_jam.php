<?php

require '../../config/config.php';

$kd = mysqli_real_escape_string($conn,$_GET['kd']);

$result = mysqli_query($conn, "DELETE FROM tb_jam WHERE kd_jam = '$kd' ");