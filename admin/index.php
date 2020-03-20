<?php
require '../config/config.php';


if (!isset($_GET["page"])) {
	$page = "dashboard";
}else{
	$page = $_GET["page"];
}

require 'header.php';

if ($page == "dashboard") {
	require 'pages/dashboard.php';
}

if ($page == "kategori") {
	require 'pages/kategori.php';
}

if ($page == "audio") {
	require 'pages/audio.php';
}

if ($page == "jam") {
	require 'pages/jam.php';
}

if ($page == "start") {
	require 'pages/start.php';
}

if ($page == "profile saya") {
	require 'pages/profile.php';
}
if ($page == "ubah password") {
	require 'pages/ubah_password.php';
}

if ($page == "jadwal") {
	if (!isset($_GET['hari'])) {
		echo "<script>window.location.href = 'index.php?page=jadwal&hari=Senin' </script>";
	}
	require 'pages/jadwal.php';

}

require 'footer.php';