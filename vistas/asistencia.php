<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fit Software Perú</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
    <link rel="shortcut icon" href="../admin/public/img/favicon.ico">

  </head>
  <style type="text/css">body{background-image: url('../admin/public/img/fondo.jpg');background-size: 100% 100%;background-attachment: fixed;}</style>
<body class="hold-transition lockscreen" >
<header class="main-header">
    <!-- Logo -->
    <a href="asistencia.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <img src="../admin/public/img/logo.png" width="148px">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    </nav>
</header>
<!-- Automatic element centering -->

<div class="lockscreen-wrapper">
<?php 
 //include '../ajax/asistencia.php' ?>
    <div name="movimientos" id="movimientos">
    </div> 


<div class="login-box">

  <div class="lockscreen-logo">
    <a href="#"><b> ASISTENCIA FIT</b></a>
  </div>

  </div>
  <!-- User name -->
  <div class="lockscreen-name">ASISTENCIA</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../admin/files/negocio/default.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form  action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
      <div class="input-group">
        <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">

        <div class="input-group-btn">
          <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block1 text-center">
    Ingresa tu ID de asistencia
  </div>
  <div class="text-center">

  </div>
  
  <div class="lockscreen-footer text-center">
    <a href="../admin/">Iniciar Sesión</a>
  </div>

</div>

<!-- /.center -->


    <!-- jQuery -->
    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/asistencia.js"></script>


  </body>
</html> 
