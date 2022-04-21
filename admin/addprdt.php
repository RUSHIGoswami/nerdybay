<?php
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include '../config/constants.php';
		$pname = $_POST['pname'];
		$product_img = $_POST['product_img'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$tag = $_POST['tag'];
		$price = $_POST['price'];
		$units = $_POST['units'];
		$_SESSION['pname'] = $_POST['pname'];
		$_SESSION['CPU'] = $_POST['CPU'];
		$_SESSION['GPU'] = $_POST['GPU'];
		$_SESSION['RAM'] = $_POST['RAM'];
		$_SESSION['OS'] = $_POST['OS'];
		$_SESSION['Storage'] = $_POST['Storage'];
		$_SESSION['Weight'] = $_POST['Weight'];
		$_SESSION['Display'] = $_POST['Display'];
		$_SESSION['Dimensions'] = $_POST['Dimensions'];
		$product_sql = "INSERT INTO `products` (`pname`, `product_img`, `description`, `category`, `tag`, `price`, `units`) VALUES ('$pname', '$product_img', '$description', '$category', '$tag', '$price', '$units')";
		$result = mysqli_query($conn, $product_sql);
		if($result){
			header("Location: addspecs.php");
		}

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

	<title>Admin | Add Product</title>

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
	<div class="container product_box1">
		<div class="d-flex justify-content-center row">
			<div class="col-xl-12 col-lg-6 col-md-12">
				<form action="addprdt.php" method="post" class="tm-edit-product-form">
					<div class="form-group mb-3">
						<label for="name">Product Name</label>
						<input id="name" name="pname" type="text" class="form-control validate" required="" />
					</div>
					<div class="form-group mb-3">
						<label for="Image" class="form-label">Upload Product Images</label>
						<input class="form-control" name="product_img" type="file" id="formFile" multiple onchange="preview()" />
						<!-- <button onclick="clearImage()" class="btn btn-primary mt-3">Upload</button> -->
						<img id="frame" src="" class="img-fluid" width="400px" height="auto" />
					</div>
					<div class="form-group mb-3">
						<label for="description">Description</label>
						<textarea class="form-control validate" name="description" rows="3" required style="resize: none;"></textarea>
					</div>
					<fieldset>
						<legend for="stock">Technical Specs</legend>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">CPU</label>
								<input id="CPU" name="CPU" type="text" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">GPU</label>
								<input id="GPU" name="GPU" type="text" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">RAM</label>
								<input id="RAM" name="RAM" type="text" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">OS</label>
								<input id="OS" name="OS" type="text" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">Storage</label>
								<input id="Storage" name="Storage" type="text" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">Weight</label>
								<input id="Weight" name="Weight" type="text" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">Display</label>
								<input id="Display" name="Display" type="text" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="stock">Dimensions</label>
								<input id="Dimensions" name="Dimensions" type="text" class="form-control validate"
									required />
							</div>
						</div>
					</fieldset>
					<hr>
					<div class="row">
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="category">Category</label>
							<select class="custom-select tm-select-accounts" id="category" name="category" required>
								<option selected disabled>Select category</option>
								<option value="gaming">Gaming</option>
								<option value="proffesional">Proffesional</option>
								<option value="student">Student</option>
							</select>
						</div>
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="tag">Tag</label>
							<select class="custom-select tm-select-accounts" id="tag" name="tag" required>
								<option selected disabled>Select tag</option>
								<option value="new">New Arrival</option>
								<option value="popular">Most Popular</option>
								<option value="trending">Trending</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="expire_date">Price</label>
							<input id="price" name="price" type="number" min="10000" value="10000" step="any"
								class="form-control validate hasDatepicker" data-large-mode="true" />
						</div>
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="stock">Units In Stock</label>
							<input id="stock" name="units" type="number" min="5" value="5" step="any"
								class="form-control validate" required />
						</div>
					</div>
					<div class="col-12">
						<div class="single-contact-btn pb-3">
							<input class="btn contact-btn" type="submit" Value="Add Product" name="addProduct" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<footer class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<div class="foot-copyright pull-left">
						<p>
							&copy; All Rights Reserve
							<a href="#">NerdyBay</a>
						</p>
					</div>
					<!--/.foot-copyright-->
				</div>
				<!--/.col-->
				<div class="col-sm-5">
					<div class="foot-menu pull-right">
						<ul>
							<li><a href="#">legal</a></li>
							<li><a href="#">sitemap</a></li>
							<li><a href="#">privacy policy</a></li>
						</ul>
					</div>
					<!-- /.foot-menu-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
			<div id="scroll-Top">
				<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip"
					data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
			</div>
			<!--/.scroll-Top-->
		</div>
		<!-- /.container-->
	</footer>
	<script>
		function preview() {
			frame.src = URL.createObjectURL(event.target.files[0])
		}

		function clearImage() {
			document.getElementById('formFile').value = null
			frame.src = ''
		}
	</script>

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