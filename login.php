<?php

require 'config/config.php';

if (isset($_SESSION['login'])) {
  header("Location: admin/index.php?page=dashboard");
  exit();
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="vendor/material-kit/assets/css/material-kit.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url('assets/img/bg-login.jpg'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" id="my-form" method="POST" action="proses/login_action.php">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
              </div>
              <p class="description text-center mt-5">Login to start your session</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email..." name="email">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password..." name="password">
                </div>
              </div>
              <div class="container">
                <div class="row mt-4">
                  <div class="col-lg-8 offset-lg-2">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="vendor/material-kit/assets/js/core/jquery.min.js"></script>
<script src="vendor/sweetalert2/sweetalert2.js"></script>
<script>
  $(function(){
    $("#my-form").submit(function(e){
      e.preventDefault()
      $.ajax({
        url : 'proses/login_action.php',
        method : 'post',
        data : $("#my-form").serialize(),
        success : function(datas) {
          var data = JSON.parse(datas)

          if (data.status == "ok") {
            Swal.fire(
              'Berhasil',
              'Login berhasil!',
              'success'
              )

            window.setTimeout(function(){
              window.location.href = 'admin/index.php'
            }, 1500)

          }else{
            Swal.fire(
              'Gagal',
              'Email atau password anda salah!',
              'error'
              )
          }
        }
      })
    })
  })
</script>
</html>