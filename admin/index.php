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

if ($page == "import database") {
	require 'pages/import.php';
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
	require 'pages/jadwal.php';
}

if ($page == "harian") {
	if (!isset($_GET['hari'])) {
		echo "<script> window.location.href = 'index.php?page=harian&hari=Senin' </script>";
	}
	require 'pages/harian.php';
}

if ($page == "ujian") {
	if (!isset($_GET['hari'])) {
		echo "<script> window.location.href = 'index.php?page=ujian&hari=Senin' </script>";
	}
	require 'pages/ujian.php';
}

require 'footer.php';