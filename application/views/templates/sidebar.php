<body class="hold-transition sidebar-mini sm">
   <div class=" wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="#" class="nav-link">Contact</a>
            </li>
         </ul>

         <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-user"></i></a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> Hi,
                  </a>
                  <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                     <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
               </div>
            </li>
         </ul>



      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="index3.html" class="brand-link">
            <img src="<?= base_url('assets/template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
               class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="<?= base_url('assets/template/') ?>dist/img/user2-160x160.jpg"
                     class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block">Admin</a>
               </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                     <a href="<?= base_url('dasbhoard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>Dasbhoard</a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= base_url('profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        Profile Gembala
                     </a>
                  </li>


                  <li class="nav-item">
                     <a href="<?= base_url('datagereja') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        Data Gereja
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('dokumentasi') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        Dokumentasi
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Upload') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        Laporan PDF
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
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><?= $title ?></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <div class="content">
            <div class="container-fluid">