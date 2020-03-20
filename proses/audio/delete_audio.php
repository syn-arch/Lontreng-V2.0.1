<?php

require '../../config/config.php';

$kd = mysqli_real_escape_string($conn,$_GET['kd']);

$audio = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_audio WHERE kd_audio = '$kd' "))['audio'];

unlink("../../assets/audio/" . $audio);

$result = mysqli_query($conn, "DELETE FROM tb_audio WHERE kd_audio = '$kd' ");