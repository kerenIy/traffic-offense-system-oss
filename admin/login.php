<?php require_once('../config.php');
//require_once('../classes/Login.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <style>
   body{
     /* background-image: url('<?php echo validate_image($_settings->info('cover')) ?>'); */
     background-color: #1D1F2C;
     color: #1D1F2C;
     background-size:cover;
     background-repeat:no-repeat;
   }
 </style>
<body class="hold-transition login-page " style="background-color: #1D1F2C; color: #fff;">
  <script>
    start_loader()
  </script>
  <h2 class="text-center pb-4 mb-4 text-light"><?php echo $_settings->info('name') ?> - Admin Login</h2>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-primary">
    <div class="card-body">
      <form id="login-frm" action="" method="post" style="padding: 30px;">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row justify-content-between">
          <div class="col">
            <a href="<?php echo base_url ?>">Go to Portal</a>
          </div>
          <!-- /.col -->
          <div class="col text-right">
            <button type="submit" class="btn btn-primary btn-flat btn-sm" style="padding: 10px 25px; font-size: 1.1rem; border-radius: 5px; border: #1D1F2C; background-color: #1D1F2C; color: #fff;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>