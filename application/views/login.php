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

<body class="hold-transition home-particles">
  <!-- <div class="shadow-overlay"></div> -->
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
          <div class="col-xs-offset-0 col-xs-8">
            <a href="<?php echo base_url(); ?>index.php/User/Ganti">Lupa Password</a><br>
            <a href="<?php echo base_url(); ?>index.php/User/daftar" class="text-center">Daftar Akun Baru</a>
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

    </div>
    <!-- /.login-box-body -->
    <?php
    // echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
  </div>

  <script>
    $('.home-particles').particleground({
      dotColor: '#fff',
      lineColor: '#555555',
      particleRadius: 6,
      curveLines: true,
      density: 10000,
      proximity: 110
    });;
    $(".home-slides").vegas({
      transition: 'fade',
      transitionDuration: 2500,
      delay: 5000,
      slides: [{
          src: "<?php echo base_url(); ?>surat/themes10.jpg"
        },
        {
          src: "<?php echo base_url(); ?>surat/imagges.jpeg"
        },
        {
          src: "<?php echo base_url(); ?>surat/LogoARP.png"
        }
      ]
    });
  </script>
  <style type="text/css">
    .home-particles {
      background: #d2d6de;
      overflow: hidden;

    }

    .home-particles .pg-canvas {
      position: absolute;
      top: 0;
      left: 0;
      height: 100% !important;
      width: 100% !important;
      opacity: .52;
      background-image: url(<?php echo base_url(); ?>surat/themes10.jpg);
    }

    .home-particles .shadow-overlay {
      background: #d2d6de;
      display: none;
    }

    .home-slides {
      height: 100% !important;
      width: 100% !important;
      nt;
    }

    /* .home-slides .pg-canvas {
    position: absolute;
    top: 0;
    left: 0;
    height: 100% !important;
    width: 100% !important;
    opacity: .52;
  }

  .home-slides .shadow-overlay {
    background: #d2d6de;
    display: none;
  } */
  </style>

  <?php $this->load->view('_template/footer.php') ?>
</body>

</html>