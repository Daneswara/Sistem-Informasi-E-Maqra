<!-- <html>
<head>
    <title>Login</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/User/proses" method="post">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <button type="submit">Login</button>
</form>
</body> -->
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
    <!-- <img src="<?php echo base_url(); ?>surat/themes10.jpg" class="logo-default" height="100px" alt="Logo"> -->
        <a href="<?php echo base_url(); ?>"><b>Login</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <!-- <p class="login-box-msg">
          Log in to start your session
        </p> -->
        <?php echo $this->session->flashdata('pesan'); ?>
        <form action="<?php echo base_url(); ?>index.php/User/proses" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                </div>
                <!-- <div class="col-xs-offset-4 col-xs-4">
                <a type="submit" class="btn btn-secondary btn-block btn-flat" href="<?php echo base_url(); ?>index.php/User/keDaftar" > Daftar</a>
                </div> -->
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

        <a href="<?php echo base_url(); ?>index.php/User/Ganti">Lupa Password</a><br>
        <a href="<?php echo base_url(); ?>index.php/User/daftar" class="text-center">Daftar Akun Baru</a>

    </div>
    <!-- /.login-box-body -->
    <?php
    // echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
</div>


<!-- /.login-box -->

<?php  $this->load->view('_template/footer.php') ?>
</body>
</html>

