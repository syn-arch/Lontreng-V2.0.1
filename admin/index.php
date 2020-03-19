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

require 'footer.php';