<?php 

require '../../config/config.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../../index.php");
  exit();
}

$tipe = $_GET["tipe"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>PLAY LONTRENG</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../vendor/material-kit/assets/css/material-kit.min.css" rel="stylesheet" />
</head>
<body class="landing-page sidebar-collapse" onload="max()">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          SMK BUDI BAKTI CIWIDEY </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../../assets/img/bg-login.jpg');background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 id="time" style="font-size: 120px"></h1>
          <h4><b>Insanity</b>: doing the same thing over and over again and expecting different results. - Albert Einstein</h4>
          <br>
          <audio id="audio" controls=""></audio>
          <br>
          <a href="#" onclick="window.close()" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-stop"></i>&nbsp; STOP LONTRENG
          </a>
        </div>
        <div class="col-md-6">
          <h4 class="mt-5">Sekarang</h4>
          <h1 id="jadwal" style="font-size: 50px"></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" style="transform: translateY(-150px);">
          <h4 class="mt-5">Selanjutnya</h4>
          <h1 id="next" style="font-size: 50px"></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Jadwal Hari Ini: <?php echo hari_ini() . ', ' . date('d-m-Y') ?></h2>
            <h5 class="description">
              Data jadwal bel hari ini, anda dapat menyesuaikannya pada halaman admin
            </h5>

            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Audio</th>
                    <th>Jam</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no=1; 
                    $today = hari_ini(); 
                    foreach(query("SELECT * FROM tb_jadwal JOIN tb_kategori USING(kd_kategori) JOIN tb_audio USING(kd_audio) JOIN tb_jam USING(kd_jam) WHERE hari = '$today' AND tipe = '$tipe' ") as $row): ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nm_kategori'] ?></td>
                      <td><audio src="../../assets/audio/<?php echo $row['audio'] ?>" controls></audio></td>
                      <td><?php echo $row['jam'] ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">KORLABBC</a>
      </div>
    </div>
  </footer>

<!--   Core JS Files   -->
<script src="../../vendor/material-kit/assets/js/core/jquery.min.js"></script>
<script src="../../assets/js/play.js"></script>
</body>
</html>