<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Registration Page (v2)</title>

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

<body class="hold-transition register-page">
   <div class="register-box">
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>


            <form action="<?= base_url('auth/registration') ?>" method="post">
               <div class="form-group ">
                  <input type="text" name="name" class="form-control form-control-user" id="name"
                     placeholder="Full Name" value="<?= set_value('name') ?>">
                  <?= form_error('name','<small class="text-danger ">','</small>'); ?>

               </div>
               <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-user" id="email"
                     placeholder="Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email','<small class="text-danger ">','</small>'); ?>
               </div>

               <div class="form-group">
                  <input type="password" name="password1" class="form-control" placeholder="Password">
                  <?= form_error('password1','<small class="text-danger ">','</small>'); ?>
               </div>
               <div class="form-group">
                  <input type="password" name="password2" class="form-control" placeholder="Retype password">
               </div>
               <div class="row">
                  <div class="col-8">
                     <a class="btn btn-info" href="<?= base_url('auth')?>">Batal</a>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block">Register</button>
                  </div>
                  <!-- /.col -->
               </div>
            </form>
         </div>
         <!-- /.form-box -->
      </div><!-- /.card -->
   </div>
   <!-- /.register-box -->

   <!-- jQuery -->
   <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js">
   </script>
   <!-- AdminLTE App -->
   <script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>