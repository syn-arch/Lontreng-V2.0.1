<?php

require '../../config/config.php';

foreach($_POST["kd"] as $id)
{

	$query = "DELETE FROM tb_jadwal WHERE kd_jadwal = '". $id ."'";
	mysqli_query($conn, $query);
}