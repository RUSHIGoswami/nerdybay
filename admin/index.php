<?php
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
	<title>Admin | Dashboard</title>
	<!-- for title img -->
	<link rel="shortcut icon" type="image/icon" href="../assets/images/logo/favicon.jpg" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

	<!--linear icon css-->
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />

	<!--animate.css-->
	<link rel="stylesheet" href="../assets/css/animate.css" />

	<!--hover.css-->
	<link rel="stylesheet" href="../assets/css/hover-min.css" />

	<!--vedio player css-->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css" />

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
	<link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" />

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

	<!-- bootsnav -->
	<link href="../assets/css/bootsnav.css" rel="stylesheet" />

	<!--style.css-->
	<link rel="stylesheet" href="../assets/css/style.css" />

	<!--responsive.css-->
	<link rel="stylesheet" href="../assets/css/responsive.css" />
</head>

<body>
	<!-- navbar -->
	<?php
		include 'adminnav.php';
		?>
	<!-- navbar end -->
	<!--statistics start-->
	<section class="statistics">
		<div class="container">
			<div class="statistics-counter">
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-img">
							<img src="../assets/images/counter/counter1.png" alt="counter-icon" />
						</div>
						<!--/.statistics-img-->
						<div class="statistics-content">
							<div class="counter">2556</div>
							<h3>days worked</h3>
						</div>
						<!--/.statistics-content-->
					</div>
					<!--/.single-ststistics-box-->
				</div>
				<!--/.col-->
				<div class="col-md-3 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-img">
							<img src="../assets/images/counter/counter2.png" alt="counter-icon" />
						</div>
						<!--/.statistics-img-->
						<div class="statistics-content">
							<div class="counter">3326</div>
							<h3>Units Sold</h3>
						</div>
						<!--/.statistics-content-->
					</div>
					<!--/.single-ststistics-box-->
				</div>
				<!--/.col-->
				<div class="col-md-4 col-sm-6">
					<div class="single-ststistics-box">
						<div class="statistics-img">
							<img src="../assets/images/counter/counter4.png" alt="counter-icon" />
						</div>
						<!--/.statistics-img-->
						<div class="statistics-content">
							<div class="counter">856</div>
							<h3>Happy customers</h3>
						</div>
						<!--/.statistics-content-->
					</div>
					<!--/.single-ststistics-box-->
				</div>
				<!--/.col-->
			</div>
			<!--/.statistics-counter-->
		</div>
		<!--/.container-->
	</section>
	<!--statistics end-->
	<?php include 'footer.php';?>
	<!-- jaquery link -->

	<script src="../assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
	</script>

	<!--bootstrap.min.js-->
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="../assets/js/bootsnav.js"></script>

	<!-- for manu -->
	<script src="../assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

	<!-- vedio player js -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--owl.carousel.js-->
	<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>

	<!-- counter js -->
	<script src="../assets/js/jquery.counterup.min.js"></script>
	<script src="../assets/js/waypoints.min.js"></script>

	<!--Custom JS-->
	<script type="text/javascript" src="../assets/js/jak-menusearch.js"></script>
	<script type="text/javascript" src="../assets/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>