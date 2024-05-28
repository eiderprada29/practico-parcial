<?php
define( "BASE_URL", "PRACTICO/view");
require_once("../config/config.php");
if(isset($_SESSION["id"])){
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>view_social_media</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!-- Incluir el CSS de Ion Icons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../modulos/menu.php'; ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
  
      <span class="brand-text font-weight-light">Portafolio_Engineer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../imagenes/user.jpg" class="img-circle elevation-2" alt="User Image" style="width: 35px; height: 35px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"];?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/widgets.php" class="nav-link">
              <i class="nav-icon fas fa-table "></i>
              <p>
                Inicio 
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Perfil</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Social Media</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>Menu</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Estudios</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>Trabajos Realizados </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Info Personal </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
              <p>Experiencia</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="contenido-susan">
        <?php
            $proyecto = "Admón de Redes Sociales";
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $proyecto; ?></title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <style>
                    .contenido-susan {
                        background-color: #fff;
                        border-radius: 8px;
                        margin-left: 20px;
                        margin-right: 20px;
                    }
                    .btn-create {
                        border-color: blue; /* Borde azul */
                        color: blue; /* Texto azul */
                    }
                    .btn-load {
                        border-color: gray; /* Borde gris */
                        color: gray; /* Texto gris */
                    }
                </style>
            </head>
            <body>
                <div class="col-lg-8 mx-auto p-3 py-md-5">
                    <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                        <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                            <span class="fs-4"><?php echo $proyecto; ?></span>
                        </a>
                    </header>
                    <div class="mt-3">
                            <a href="process.php?regenerar=1" class="btn btn-create">crear</a>
                            <a href="reset.php" class="btn btn-load">cargar</a>
                    </div>
                </div>
            </body>
            </html>
    </div>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </foote

  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/dist/js/demo.js"></script>
</body>
</html>

<?php
    }else{
        header("Location:".Conectar::ruta()."/view/error.php");
    }

?>