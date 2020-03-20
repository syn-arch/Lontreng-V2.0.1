<?php

require '../../config/config.php';

require('../../config/ssp.class.php');

$hari = mysqli_real_escape_string($conn, $_GET['hari']);
$tipe = mysqli_real_escape_string($conn, $_GET['tipe']);

$table = <<<EOT
 (
     SELECT 
      a.kd_jadwal, 
      a.hari, 
      b.nm_kategori, 
      c.audio,
      d.jam
    FROM tb_jadwal a
    INNER JOIN tb_kategori b ON a.kd_kategori = b.kd_kategori
    INNER JOIN tb_audio c ON a.kd_audio = c.kd_audio
    INNER JOIN tb_jam d ON a.kd_jam = d.kd_jam
    WHERE 
    a.hari = '$hari'
    AND
    a.tipe = '$tipe'

 ) temp
EOT;


$primaryKey = 'kd_jadwal';
 
$columns = array(
    array( 'db' => 'kd_jadwal',		'dt' => "kd_jadwal"),
    array( 'db' => 'nm_kategori',	'dt' => "nm_kategori"),
    array( 'db' => 'audio',			'dt' => "audio"),
    array( 'db' => 'jam',			'dt' => "jam" )
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