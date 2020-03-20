<?php

require '../config/useful/backup_database.php';

EXPORT_DATABASE("localhost","root","","db_bel",false,"backup_db_bel_".date('d-m-Y').'.sql');