<?php
session_start();

$conn = mysqli_connect("localhost","root","","db_bel");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function in_array_r($needle, $haystack, $strict = false) {
	foreach ($haystack as $item) {
		if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
			return true;
		}
	}
	return false;
}

function hari_ini(){
	$hari = date("D");
	
	switch($hari){
		case 'Sun':
		$hari_ini = "Minggu";
		break;
		
		case 'Mon':			
		$hari_ini = "Senin";
		break;
		
		case 'Tue':
		$hari_ini = "Selasa";
		break;
		
		case 'Wed':
		$hari_ini = "Rabu";
		break;
		
		case 'Thu':
		$hari_ini = "Kamis";
		break;
		
		case 'Fri':
		$hari_ini = "Jumat";
		break;
		
		case 'Sat':
		$hari_ini = "Sabtu";
		break;
		
		default:
		$hari_ini = "Tidak di ketahui";		
		break;
	}

	return $hari_ini;
	
}