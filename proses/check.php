<?php 

require '../config/config.php';

$time = $_POST['jam'];

$jadwal = query("SELECT * FROM tb_jadwal JOIN tb_kategori USING(kd_kategori) JOIN tb_audio USING(kd_audio) JOIN tb_jam USING(kd_jam)");

$skrg = hari_ini();

if (empty($jadwal)) {
	echo '<h1 class="text-center">Jadwal Kosong</h1>';
	die;
}

if (in_array_r($skrg, $jadwal) && in_array_r($time, $jadwal)) {

	$query = "SELECT audio FROM tb_jadwal JOIN tb_audio USING(kd_audio) JOIN tb_jam USING(kd_jam) WHERE hari = '$skrg' AND jam = '$time' ";
	$audio = mysqli_fetch_assoc(mysqli_query($conn, $query))['audio'];

	echo '<audio src = "../../assets/audio/' . $audio .'" autoplay controls></audio>';

}