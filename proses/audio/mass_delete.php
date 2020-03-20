<?php

require '../../config/config.php';

foreach($_POST["kd"] as $id)
{

	$audio = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_audio WHERE kd_audio = '$id' "))['audio'];

	unlink("../../assets/audio/" . $audio);
	
	$query = "DELETE FROM tb_audio WHERE kd_audio = '". $id ."'";
	mysqli_query($conn, $query);
}