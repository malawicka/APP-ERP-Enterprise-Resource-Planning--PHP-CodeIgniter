<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="<?=csrf_token()?>" content="<?= csrf_hash()?>" class="csrf">

  <title><?= $title ?> Aplikasi ERP Penjualan dan Distribusi Elektronik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('/assets')?>/plugins/fontawesome-free/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('/assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('/assets') ?>/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/assets') ?>/dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="<?= base_url('/assets') ?>/dist/img/logo.jpg" type="image/x-icon">
  
</head>

<body class="hold-transition layout-top-nav text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-red">
    <div class="container">
      <a href="<?= base_url('/administrator') ?> class="navbar-brand">
        <img src="<?= base_url('/assets') ?>/dist/img/Logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LINOS</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url('/administrator') ?>" class="nav-link">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Master</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?= base_url('administrator/datapengguna') ?>" class="dropdown-item">Data Pengguna</a></li>
            <li><a href="<?= base_url('administrator/databarang') ?>" class="dropdown-item">Data Barang</a></li>
            <li><a href="<?= base_url('administrator/datasupplier') ?>" class="dropdown-item">Data Supplier</a></li>
            <li><a href="<?= base_url('administrator/datapembelian') ?>" class="dropdown-item">Data Pembelian</a></li>


             

              <!-- Level two dropdown-->
    
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

       
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cog"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
           
            <a href="<?=base_url('administrator/gantipassword/'). session()->get('id_user')?>" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> Ganti Password
             
            </a>
           
            <a href="<?=base_url('administrator/profile/'). session()->get('id_user')?>" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> Profile User
             
            </a>
           
            <a href="<?=site_url('logout')?>" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> Logout
              
            </a>
           
        
          </div>
        </li>
        
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <?= $this->renderSection("konten")?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <?= session()->get('nama_lengkap')?>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="http://localhost:8080">LINOS</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('/assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/assets') ?>/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('/assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('/assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



</body>
</html>
