<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Log in (v2)</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <!-- /.login-logo -->
      <?= $this->session->flashdata('message')?>
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Masukan Email dan Password Anda</p>
            <form action="<?= base_url('auth') ?>" method="post">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email"
                     aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email')?>">
                  <?= form_error('email','<small class="text-danger ">','</small>'); ?>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password"
                     placeholder="Password">
                  <?= form_error('password','<small class="text-danger ">','</small>'); ?>
               </div>


               <button type="submit" class="btn btn-primary btn-block">Login</button>


               <!-- <a href="<?= base_url('auth/registration')?>">Registrasi</a> -->

            </form>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js">
   </script>
   <!-- AdminLTE App -->
   <script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>

</html>