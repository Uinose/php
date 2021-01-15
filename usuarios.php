<?php 
    include "./php/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Tienda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 <?php include "./layouts/header.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "./layouts/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Agregar usuarios</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
       
        <div class="card-body">
        <?php
        if(isset($_GET['error'])){
        ?>
            <div class="alert alert-danger">
            <b>Error:</b> <?php echo $_GET['error']; ?>
            </div>
        <?php
        }
        ?>
        
        <form action="./php/insertarUsuario.php" class="row" method="POST">
            <div class="col-4">
                <label for="Nombre"></label>
                <input type="text" class="form-control" placeholder="Inserta tu nombre" name="nombre" id="txtnombre" required>
            </div>
            <div class="col-4">
                <label for="Apellido"></label>
                <input type="text" class="form-control" placeholder="Inserta tu Apellido" name="ap" required>
            </div>
            <div class="col-4">
                <label for="Email"></label>
                <input type="text" class="form-control" placeholder="Inserta tu Email" name="email" required>
            </div>
            <div class="col-4">
                <label for="Password"></label>
                <input type="password" class="form-control" placeholder="Inserta tu Password" name="pass1" required>
            </div>
            <div class="col-4">
                <label for="Confirma tu Password"></label>
                <input type="password" class="form-control" placeholder="Confirma tu Password" name="pass2" required>
            </div>
            <div class="col-4">
                <br>
                <button class="btn btn-primary"> <i class="fa fa-plus"></i> Insertar </button>
            </div>
        </div>
        <!-- /.card-body -->
        
       
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
        <h2 class="subtitle">Usuarios</h2>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Marisol</td>
                    <td>RealiOnti@gmail.com</td>
                    <td>**********</td>
                    <td>
                        <button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i>></button>
                        <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i>></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "./layouts/footer.php" ?>

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dashboard/dist/js/demo.js"></script>
</body>
</html>
