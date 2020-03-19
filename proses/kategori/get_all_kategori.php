<?php

require '../../config/config.php';

require('../../config/ssp.class.php');

$table = 'tb_kategori';
$primaryKey = 'kd_kategori';
 
$columns = array(
    array( 'db' => 'kd_kategori','dt' => "kd_kategori" ),
    array( 'db' => 'nm_kategori','dt' => "nm_kategori" )
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