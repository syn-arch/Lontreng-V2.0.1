<?php

require '../../config/config.php';

$nm_audio = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nm_audio']));

$temp_name  = $_FILES['file_audio']['tmp_name'];  
$location = '../../assets/audio/';

$uniqueName = uniqid() . '.mp3';

move_uploaded_file($temp_name, $location . $uniqueName);

$result = mysqli_query($conn, "INSERT INTO tb_audio VALUES('','$nm_audio','$uniqueName')");

header("Location: ../../admin/index.php?page=audio&msg=added");