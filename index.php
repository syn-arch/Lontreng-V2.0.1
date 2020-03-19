<?php 

require 'config/config.php';

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit();
}

?>