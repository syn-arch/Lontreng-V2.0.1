<?php

require '../../config/config.php';

foreach($_POST["kd"] as $id)
{
	$query = "DELETE FROM tb_jam WHERE kd_jam = '". $id ."'";
	mysqli_query($conn, $query);
}