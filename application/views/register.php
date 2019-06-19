<!-- <html>
<head>
    <title>Register</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/User/daftar" method="post" enctype="multipart/form-data">
    Nama
    <input type="text" name="nama" placeholder="Nama" required/><br>
    Daerah
    <input type="text" name="daerah" placeholder="Daerah" required/><br>
    Email
    <input type="text" name="email" placeholder="Email" required/><br>
    Password
    <input type="password" name="password" placeholder="Password" required/><br>
    No. HP
    <input type="text" name="nohp" placeholder="No. HP" required/><br>
    Surat Mandat Sebagai Admin Kafilah
    <input type="file" name="surat" required/><br>
    <button type="submit">Register</button>
</form>
</body>
</html>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo base_url(); ?>"><b>Daftar Akun Baru</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <!-- <p class="login-box-msg">
          Log in to start your session
        </p> -->

        <form action="<?php echo base_url(); ?>index.php/User/daftar" method="post">
        <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nama" name="nama">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Daerah" name="daerah">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            
            <div class="row">
                <!-- <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                </div> -->
                <div class="col-xs-offset-8 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                </div>
            </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>
    <!-- /.login-box-body -->
    <?php
    // echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
</div>


<!-- /.login-box -->

<?php $this->load->view('_template/footer.php') ?>
</body>
</html>
