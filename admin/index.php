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

require 'footer.php';