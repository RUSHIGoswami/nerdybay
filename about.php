<?php
	session_start();
	if ($_SESSION['logincheck'] != true) {
		header('Location: login.php');
	}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<!-- META DATA -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

	<!-- TITLE OF SITE -->
	<title>NerdyBay | about</title>

	<!-- for title img -->
	<link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.jpg" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

	<!--linear icon css-->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />

	<!--animate.css-->
	<link rel="stylesheet" href="assets/css/animate.css" />

	<!--hover.css-->
	<link rel="stylesheet" href="assets/css/hover-min.css" />

	<!--vedio player css-->
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- bootsnav -->
	<link href="assets/css/bootsnav.css" rel="stylesheet" />

	<!--style.css-->
	<link rel="stylesheet" href="assets/css/style.css" />

	<!--responsive.css-->
	<link rel="stylesheet" href="assets/css/responsive.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!--[if lte IE 9]>
			<p class="browserupgrade">
				You are using an
				<strong>outdated</strong>
				browser. Please
				<a href="https://browsehappy.com/">upgrade your browser</a>
				to improve your experience and security.
			</p>
		<![endif]-->


	<!--menu start-->
	<?php include 'navbar.php'; ?>
	<!--menu end-->

	<!--about-history start-->
	<div class="about-history">
		<div class="container">
			<div class="about-history-content">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="single-about-history">
							<div class="about-history-img">
								<img src="assets/images/about/ab1.jpg" alt="about" />
							</div>
							<!--/.about-history-img-->
						</div>
						<!--/.single-about-history-->
					</div>
					<!--/.col-->

					<div class="col-md-offset-1 col-md-6 col-sm-12">
						<div class="single-about-history">
							<div class="about-history-txt">
								<h2>our history</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor
									incidd ut labore rhei et dolore magna aliqua. Ut enim ad veniam, quis laboris
									nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the
									velit esse.
								</p>

								<div class="main-timeline">
									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="experience-time">
												<h3>2015</h3>
											</div>
											<!--/.experience-time-->
										</div>
										<!--/.col-->
										<div class="col-md-10 col-sm-10">
											<div class="timeline">
												<div class="timeline-content">
													<h4 class="title">
														<span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
													</h4>

													<ul class="description">
														<li>
															Duis aute irure dolor in reprehenderit in the voluptate
															velit esse
															cillum dolore eu ugiat nulla pariatur cupiat non proident.
														</li>
													</ul>
												</div>
												<!--/.timeline-content-->
											</div>
											<!--/.timeline-->
										</div>
										<!--/.col-->
									</div>
									<!--/.row-->

									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="experience-time">
												<h3>2017</h3>
											</div>
											<!--/.experience-time-->
										</div>
										<!--/.col-->
										<div class="col-md-10 col-sm-10">
											<div class="timeline">
												<div class="timeline-content">
													<h4 class="title">
														<span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
													</h4>

													<ul class="description">
														<li>
															Duis aute irure dolor in reprehenderit in the voluptate
															velit esse
															cillum dolore eu ugiat nulla pariatur cupiat non proident.
														</li>
													</ul>
												</div>
												<!--/.timeline-content-->
											</div>
											<!--/.timeline-->
										</div>
										<!--/.col-->
									</div>
									<!--/.row-->

									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="experience-time">
												<h3>2021</h3>
											</div>
											<!--/.experience-time-->
										</div>
										<!--/.col-->
										<div class="col-md-10 col-sm-10">
											<div class="timeline">
												<div class="timeline-content">
													<h4 class="title">
														<span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
													</h4>

													<ul class="description">
														<li>
															Duis aute irure dolor in reprehenderit in the voluptate
															velit esse
															cillum dolore eu ugiat nulla pariatur cupiat non proident.
														</li>
													</ul>
												</div>
												<!--/.timeline-content-->
											</div>
											<!--/.timeline-->
										</div>
										<!--/.col-->
									</div>
									<!--/.row-->
								</div>
								<!--.main-timeline-->
							</div>
							<!--/.about-history-txt-->
						</div>
						<!--/.single-about-history-->
					</div>
					<!--/.col-->
				</div>
				<!--/.row-->
				<div class="row">
					<div class="about-vission-content">
						<div class="col-md-6 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-txt">
									<h2>vision and mission</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adiping elit, sed do eiusmod tempor
										incidd ut labore rhei et dolore magna aliqua. Ut enim ad veniam, quis laboris
										nisi ut aliquip ex ea commodo. Duis aute irure dolor in repre voluptate in the
										velit esse.
									</p>

									<div class="main-timeline xtra-timeline">
										<div class="row">
											<div class="col-sm-12">
												<div class="timeline timeline-ml-20">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle-o"
																	aria-hidden="true"></i></span>
														</h4>

														<ul class="description">
															<li>
																Duis aute irure dolor in reprehenderit in the voluptate
																velit esse
																cillum dolore eu ugiat nulla pariatur cupiat non
																proident.
															</li>
														</ul>
													</div>
													<!--/.timeline-content-->
												</div>
												<!--/.timeline-->
											</div>
											<!--/.col-->
										</div>
										<!--/.row-->

										<div class="row">
											<div class="col-sm-12">
												<div class="timeline timeline-ml-20">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle-o"
																	aria-hidden="true"></i></span>
														</h4>

														<ul class="description">
															<li>
																Duis aute irure dolor in reprehenderit in the voluptate
																velit esse
																cillum dolore eu ugiat nulla pariatur cupiat non
																proident.
															</li>
														</ul>
													</div>
													<!--/.timeline-content-->
												</div>
												<!--/.timeline-->
											</div>
											<!--/.col-->
										</div>
										<!--/.row-->

										<div class="row">
											<div class="col-sm-12">
												<div class="timeline timeline-ml-20">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle-o"
																	aria-hidden="true"></i></span>
														</h4>

														<ul class="description">
															<li>
																Duis aute irure dolor in reprehenderit in the voluptate
																velit esse
																cillum dolore eu ugiat nulla pariatur cupiat non
																proident.
															</li>
														</ul>
													</div>
													<!--/.timeline-content-->
												</div>
												<!--/.timeline-->
											</div>
											<!--/.col-->
										</div>
										<!--/.row-->
									</div>
									<!--.main-timeline-->
								</div>
								<!--/.about-history-txt-->
							</div>
							<!--/.single-about-history-->
						</div>
						<!--/.col-->

						<div class="col-md-offset-1 col-md-5 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-img">
									<img src="assets/images/about/ab2.jpg" alt="about" />
								</div>
								<!--/.about-history-img-->
							</div>
							<!--/.single-about-history-->
						</div>
						<!--/.col-->
					</div>
					<!--/.about-vission-content-->
				</div>
				<!--/.row-->
			</div>
			<!--/.about-history-content-->
		</div>
		<!--/.container-->
	</div>
	<!--/.about-history-->
	<!--about-history end-->

	<!-- testemonial Start -->
	<section class="testemonial">
		<div class="container">
			<div class="section-header text-center">
				<h2>
					<span>what our customer say about us</span>
				</h2>
			</div>
			<!--/.section-header-->
			<div class="owl-carousel owl-theme" id="testemonial-carousel">
				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img" />
						</div>
						<!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet conse adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..
							</p>
							<h3>
								<a href="#">kevin watson</a>
							</h3>
						</div>
						<!--/.home1-testm-txt-->
					</div>
					<!--/.home1-testm-single-->
				</div>
				<!--/.item-->
				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial2.jpg" alt="img" />
						</div>
						<!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet conse adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..
							</p>
							<h3>
								<a href="#">kevin watson</a>
							</h3>
						</div>
						<!--/.home1-testm-txt-->
					</div>
					<!--/.home1-testm-single-->
				</div>
				<!--/.item-->
				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img" />
						</div>
						<!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet conse adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..
							</p>
							<h3>
								<a href="#">kevin watson</a>
							</h3>
						</div>
						<!--/.home1-testm-txt-->
					</div>
					<!--/.home1-testm-single-->
				</div>
				<!--/.item-->
			</div>
			<!--/.testemonial-carousel-->
		</div>
		<!--/.container-->
	</section>
	<!--/.testimonial-->
	<!-- testemonial End -->

	<!--hm-footer start-->
	<?php include 'footer.php'; ?>
	<!-- footer-copyright end -->

	<!-- jaquery link -->

	<script src="assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
	</script>

	<!--bootstrap.min.js-->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!-- for menu -->
	<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

	<!-- video player js -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--owl.carousel.js-->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

	<!-- counter js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>

	<!--Custom JS-->
	<script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>