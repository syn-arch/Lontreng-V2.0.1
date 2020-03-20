<?php 

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../vendor/light-bootstrap/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../vendor/light-bootstrap/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>LONTRENG BY KOORLAB BBC2020</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../vendor/light-bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../vendor/light-bootstrap/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../vendor/datatables/datatables.min.css" rel="stylesheet" >
    <link href="../vendor/light-bootstrap/assets/css/demo.css" rel="stylesheet" />
    <script src="../vendor/sweetalert2/sweetalert2.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../vendor/light-bootstrap/assets/img/sidebar-4.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        <i class="nc-icon nc-bell-55"></i>
                        LONTRENG
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?php echo $page == 'dashboard' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" target="_blank">
                            <i class="nc-icon nc-send"></i>
                            <p>Lihat Website</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'start' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=start">
                            <i class="nc-icon nc-button-play"></i>
                            <p>START</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'kategori' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=kategori">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Data Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'audio' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=audio">
                            <i class="nc-icon nc-note-03"></i>
                            <p>Data Audio</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'jam' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=jam">
                            <i class="nc-icon nc-time-alarm"></i>
                            <p>Data Jam/Waktu</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'jadwal' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=jadwal">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Data Jadwal Bell</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'profile saya' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=profile saya">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Profil Saya</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'ubah password' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=ubah password">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Ubah Password</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../proses/export_database.php" target="_blank">
                            <i class="nc-icon nc-cloud-upload-94"></i>
                            <p>Export Database</p>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $page == 'import database' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=import database">
                            <i class="nc-icon nc-cloud-download-93"></i>
                            <p>Import Database</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="nc-icon nc-button-power"></i>
                            <p>Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> APLIKASI PENJADWALAN BELL SEKOLAH </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon"><?php echo $_SESSION['nm_user'] ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="index.php?page=profil saya">My Profile</a>
                                    <a class="dropdown-item" href="index.php?page=ubah password">Change Passowrd</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    