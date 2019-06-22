<!DOCTYPE html>
<html>
<head>
    <title>Ganti Password</title>
    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo base_url(); ?>"><b>Ganti Password</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <!-- <p class="login-box-msg">
          Log in to start your session
        </p> -->

        <form action="<?php echo base_url(); ?>index.php/User/gantipswd" method="post">
        <!-- <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nama" name="nama">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div> -->
            <!-- <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Daerah" name="daerah">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div> -->
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password Lama" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password Baru" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Ulangi Password Baru" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <!-- <div class="form-group">
                  <label for="exampleInputFile">Surat Mandat Sebagai Admin Kafilah</label>
                  <input type="file" id="exampleInputFile">
             </div> -->
            
            <div class="row">
                <!-- <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                </div> -->
                <div class="col-xs-offset-8 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ganti</button>
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
