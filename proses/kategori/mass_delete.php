<?php

require '../../config/config.php';

foreach($_POST["kd"] as $id)
{
	$query = "DELETE FROM tb_kategori WHERE kd_kategori = '". $id ."'";
	mysqli_query($conn, $query);
}