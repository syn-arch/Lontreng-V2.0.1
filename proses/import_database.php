<?php

require '../config/useful/import_database.php';

move_uploaded_file($_FILES["sql"]["tmp_name"], '../assets/sql/'. $_FILES["sql"]["name"]);

$import = IMPORT_TABLES("localhost","root","","db_bel", "../assets/sql/" . $_FILES["sql"]["name"]);

if ($import) {
	header("Location: ../admin/index.php?page=import database&msg=imported");
}else{
	header("Location: ../admin/index.php?page=import database&msg=error");
}
