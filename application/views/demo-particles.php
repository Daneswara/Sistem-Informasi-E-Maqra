<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title>Khronos - Particles</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/Khronos10/css/base.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/Khronos10/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/Khronos10/css/vendor.css">

	<!-- script
   ================================================== -->
	<script src="<?php echo base_url(); ?>asset/Khronos10/js/modernizr.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
	<header>


	</header> <!-- /header -->

	<!-- home
   ================================================== -->
	<section id="home" class="home-particles">

		<div class="shadow-overlay"></div>

		<div class="content-wrap-table">

			<div class="main-content-tablecell">
				<div class="col-twelve">

					<div class="row">
						<div class="col-twelve">
							<!-- <a href=""><b>Siksa Waktu Anda <br>
									<?php //echo date('d-m-Y H:i:s', strtotime($jadwal[0]->waktu_akhir_acak_nourut)); ?>
							</a> -->
							<div class="half font-light">
							<span><h2>Siksa Waktu Anda</h2> </span>
							</div>
							<div id="counter">
		
								<div class="half">
									<span><?php echo date('d-m-Y H:i:s', strtotime($jadwal[0]->waktu_akhir_acak_nourut)); ?>
									</span>
									<!-- <span>23 <sup>hours</sup></span> -->
								<!-- </div>
								<div class="half">
									<span>50 <sup>mins</sup></span>
									<span>33 <sup>secs</sup></span>
								</div> -->
							</div>

							<div class="bottom-text">
								<h1></h1>
								<p>
								</p>
							</div>
							<!-- <div class="footer-bottom">

							<div class="footer-logo">
								<img src="images/footer-logo.png" alt="">
							</div>

							<div class="copyright">
								<span>© Copyright Khronos 2016.</span>
								<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
							</div>

						</div>  -->

						</div> <!-- /twelve -->
					</div>
					<!-- /row -->

				</div> <!-- /main-content -->

			</div> <!-- /content-wrap -->

	</section> <!-- /home -->

	<!-- Java Script
   ================================================== -->
	<script src="<?php echo base_url(); ?>asset/Khronos10/js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/Khronos10/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>asset/Khronos10/js/main.js"></script>

</body>

</html>