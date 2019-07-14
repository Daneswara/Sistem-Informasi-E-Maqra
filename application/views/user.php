<!DOCTYPE html>
<html>
<?php
$this->load->view('_template/header');
?>
<?php
$this->load->view('_template/head_awal');
$this->load->view('_template/side');
?>
<!-- Content Header (Page header) -->
<!-- <section class="content-header">
  <h1>
    User
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>

  </ol>

</section> -->

<!-- Main content -->
<section class="s-home" >
  <div class="grid-overlay">
    <div></div>
  </div>
  <div class="home-content">
    <div class="row home-content__main">

      <h1>
        MTQ NASIONAL 2020
      </h1>

      <h3>
        Di Malang
      </h3>

      <div class="home-content__video">
        <a class="video-link" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
          <span class="video-icon"></span>
          <span class="video-text">Tonton Video</span>
        </a>
      </div>

      <!-- <div class="lockscreen-wrapper">
        <button type="submit" href="<?php echo base_url('index.php/Nomerurut') ?>" class="btn btn-secondary">
          Mulai
        </button> -->
      <!-- <a href="#contact" class="btn btn--large">
          Let's Talk
        </a> -->
      <!-- </div> -->

    </div>

  </div>
  <!-- <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Kafilah</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No Urut</th>
            <th>Nama</th>
            <th>Kategori</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td> Nomor</td>
            <td> Peserta ke </td>
            <td>Kategori ke</td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <th>No Urut</th>
            <th>Nama</th>
            <th>Kategori</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div> -->


</section><!-- /.content -->
<script src="<?php echo base_url(); ?>/asset/vendor/jquery.js"></script>
<script src="<?php echo base_url(); ?>/asset/dist/lity.js"></script>
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
  .s-home {
    width: 100%;
    height: 100%;
    min-height: 786px;
    /* background-color: transparent; */
    background-image: url(<?php echo base_url(); ?>surat/themes10.jpg);
    position: relative;
    display: table;
  }

  .s-home::before {
    display: block;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #2980b9;
    opacity: .7;
    z-index: 2;
  }

  .s-home::after {
    display: block;
    content: "";
    width: 50%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    opacity: .5;
    z-index: 3;
    position: absolute;
    top: 0;
    left: 50%;
    bottom: 0;
    right: 0;
  }

  .s-home .grid-overlay>div {
    display: none;
  }

  .no-js .s-home {
    background: #000000;
  }

  .home-content {
    display: table-cell;
    vertical-align: middle;
    padding-top: 6.6rem;
    width: 100%;
    overflow: hidden;
    position: relative;
    z-index: 4;
  }

  .home-content h1 {
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 80pt;
    line-height: 1;
    letter-spacing: -.02em;
    color: #FFFFFF;
    margin-top: 0;
    margin-bottom: 0;
  }

  .home-content h3 {
    margin-top: 1.2rem;
    font-family: "Montserrat", sans-serif;
    font-weight: 300;
    font-size: 3.8rem;
    line-height: 1.342;
    font-style: normal;
    color: #d2d6de;
  }

  .home-content__main {
    position: relative;
    text-align: center;
  }

  /* ------------------------------------------------------------------- 
 * ## home video link
 * ------------------------------------------------------------------- */
  .home-content__video {
    display: inline-block;
    margin-top: 4.2rem;
  }

  .home-content__video .video-link {
    display: block;
    text-align: center;
    width: 20rem;
    outline: none;
    position: relative;
  }

  .home-content__video .video-icon {
    display: inline-block;
    height: 9rem;
    width: 9rem;
    border-radius: 50%;
    background-color: #2980b9;
    background-image: url(<?php echo base_url(); ?>/surat/icon-play.svg);
    background-repeat: no-repeat;
    background-position: 55% center;
    background-size: 24px 27px;
    -webkit-transition: background-color 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  .home-content__video .video-text {
    display: inline-block;
    text-align: center;
    font-family: "Nunito Sans", sans-serif;
    font-weight: 600;
    font-size: 1.3rem;
    line-height: 1;
    color: #d2d6de;
    text-transform: uppercase;
    letter-spacing: .5rem;
    -webkit-transition: color 0.3s ease-in-out;
    transition: color 0.3s ease-in-out;
    position: relative;
  }

  .home-content__video .video-link:hover .video-text {
    color: white;
  }

  .home-content__video .video-link:hover .video-icon {
    background-color: #6b3792;
  }

  .home-content__button {
    margin-top: 7.8rem;
    position: relative;
  }

  .home-content__button .btn {
    width: 30rem;
    height: 7.2rem !important;
    line-height: 6.8rem !important;
    margin-right: 0;
    position: absolute;
  }

  .home-content__button .btn:first-child {
    right: 50%;
    left: auto;
  }

  .home-content__button .btn:last-child {
    left: 50%;
    right: auto;
  }

  .home-content__button .btn:not(.btn--primary) {
    background-color: #d2d6de;
    border-color: #d2d6de;
    color: #FFFFFF;
  }

  .home-content__button .btn:not(.btn--primary):hover,
  .home-content__button .btn:not(.btn--primary):focus {
    background-color: #080a0c;
    border-color: #080a0c;
  }
</style>
<?php
$this->load->view('_template/js');
?>
<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })
</script>

</html>