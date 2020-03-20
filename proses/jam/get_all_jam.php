<?php

require '../../config/config.php';

require('../../config/ssp.class.php');

$table = 'tb_jam';
$primaryKey = 'kd_jam';
 
$columns = array(
    array( 'db' => 'kd_jam','dt' => "kd_jam" ),
    array( 'db' => 'jam','dt' => "jam" )
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