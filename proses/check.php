<?php 

require '../config/config.php';

$time = $_GET['jam'];
$tipe = $_GET['tipe'];

$jadwal = query("SELECT * FROM tb_jadwal JOIN tb_kategori USING(kd_kategori) JOIN tb_audio USING(kd_audio) JOIN tb_jam USING(kd_jam) WHERE tipe = '$tipe' ");

$skrg = hari_ini();

if (empty($jadwal)) {
	echo '<h1>Jadwal Kosong</h1>';
	die;
}

if (in_array_r($skrg, $jadwal) && in_array_r($time, $jadwal)) {

	$query = "SELECT kd_jadwal,audio,nm_kategori,hari FROM tb_jadwal JOIN tb_audio USING(kd_audio) JOIN tb_kategori USING(kd_kategori) JOIN tb_jam USING(kd_jam) WHERE hari = '$skrg' AND jam = '$time' AND tipe = '$tipe' ";
	$result = mysqli_fetch_assoc(mysqli_query($conn, $query));

	$data['audio'] = $result['audio'];
	$data['nm_kategori'] = $result['nm_kategori'];

	$id = $result['kd_jadwal'];
	$hari = $result['hari'];

	$query_next = "SELECT nm_kategori FROM tb_jadwal
					JOIN tb_kategori USING(kd_kategori)
					JOIN tb_jam USING(kd_jam)
					WHERE kd_jadwal = 
					(SELECT kd_jadwal FROM tb_jadwal 
					JOIN tb_kategori USING(kd_kategori)
					JOIN tb_jam USING(kd_jam)
					WHERE 
					kd_jadwal > $id) 
					AND tipe = '$tipe' AND hari = '$hari' ";

	$result_next = query($query_next);

	$data['next'] = $result_next[0]['nm_kategori'];

	echo json_encode($data);

}