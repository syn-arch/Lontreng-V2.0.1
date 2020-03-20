<?php

require '../../config/config.php';

require('../../config/ssp.class.php');

$table = 'tb_audio';
$primaryKey = 'kd_audio';
 
$columns = array(
    array( 'db' => 'kd_audio',	'dt' => "kd_audio" ),
    array( 'db' => 'nm_audio',	'dt' => "nm_audio") ,
    array( 'db' => 'audio',		'dt' => "audio" )
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'db_bel',
    'host' => 'localhost'
);
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);