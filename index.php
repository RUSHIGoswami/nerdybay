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
	<title>NerdyBay | Home</title>

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

	<!-- navbar -->
	<?php include 'navbar.php'; ?>
	<!-- navbar end -->




	<!-- header-slider-area start -->
	<?php include 'slider.php'; ?>
	<!-- header-slider-area end -->



	<!--Trendings start-->
	<?php include 'trendings.php'; ?>
	<!--Trendings end-->



	<!--Category start -->
	<?php include 'category.php'; ?>
	<!--Category end-->



	<!-- Footer Start -->
	<?php include 'footer.php'; ?>
	<!-- Footer End -->


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

	<!-- for manu -->
	<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

	<!-- vedio player js -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

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