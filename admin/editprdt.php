<?php
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
    include '../config/constants.php';
	if (isset($_GET['name'])) {
		$pname =$_GET['name'];
		$selectp = "SELECT * FROM `products` WHERE pname = '$pname'";
		$selects = "SELECT * FROM `product_specs` WHERE pname = '$pname'";
		$resultp = mysqli_query($conn, $selectp);
		$results = mysqli_query($conn, $selects);
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pname = $_POST['pname'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$tag = $_POST['tag'];
		$price = $_POST['price'];
		$units = $_POST['units'];
		$CPU = $_POST['CPU'];
		$GPU = $_POST['GPU'];
		$RAM = $_POST['RAM'];
		$OS = $_POST['OS'];
		$Storage = $_POST['Storage'];
		$Weight = $_POST['Weight'];
		$Display = $_POST['Display'];
		$Dimensions = $_POST['Dimensions'];
		$product_sql = "UPDATE `products` SET `category`='$category', `tag`='$tag', `price`='$price', `units`='$units' WHERE `pname`='$pname'";
		$specs_sql = "UPDATE `product_specs` SET `cpu`='$CPU', `gpu`='$GPU', `ram`='$RAM', `os`='$OS', `storage`='$Storage', `weight`='$Weight', `display`='$Display', `dimensions`='$Dimensions' WHERE `pname`='$pname'";
		$resultup = mysqli_query($conn, $product_sql);
		$resultus = mysqli_query($conn, $specs_sql);
		if($resultup && $resultus){
			header("Location: products.php");
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
				<?php
                    while(($rowp = mysqli_fetch_assoc($resultp)) && ($rows = mysqli_fetch_assoc($results))){
                        ?>
				<form action="editprdt.php" method="post" class="tm-edit-product-form">
					<div class="form-group mb-3">
						<label for="name">Product Name</label>
						<input id="name" name="pname" type="text" class="form-control validate" value="<?php echo $rowp['pname'];?>"/>
					</div>
					<div class="form-group mb-3">
						<label for="description">Description</label>
						<textarea class="form-control validate" name="description" rows="3" style="resize: none;"></textarea>
					</div>
					<fieldset>
						<legend for="stock">Technical Specs</legend>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="CPU">CPU</label>
								<input id="CPU" name="CPU" type="text" value="<?php echo $rows['cpu'];?>" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="GPU">GPU</label>
								<input id="GPU" name="GPU" type="text" value="<?php echo $rows['gpu'];?>" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="RAM">RAM</label>
								<input id="RAM" name="RAM" type="text" value="<?php echo $rows['ram'];?>" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="OS">OS</label>
								<input id="OS" name="OS" type="text" value="<?php echo $rows['os'];?>" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="Storage">Storage</label>
								<input id="Storage" name="Storage" type="text" value="<?php echo $rows['storage'];?>" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="Weight">Weight</label>
								<input id="Weight" name="Weight" type="text" value="<?php echo $rows['weight'];?>" class="form-control validate" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="Display">Display</label>
								<input id="Display" name="Display" type="text" value="<?php echo $rows['display'];?>" class="form-control validate" required />
							</div>
							<div class="form-group mb-3 col-xs-12 col-sm-6">
								<label for="Dimensions">Dimensions</label>
								<input id="Dimensions" name="Dimensions" type="text" value="<?php echo $rows['dimensions'];?>"class="form-control validate"
									required />
							</div>
						</div>
					</fieldset>
					<hr>
					<div class="row">
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="category">Category</label>
							<select class="custom-select tm-select-accounts" id="category" name="category" >
								<option selected disabled>Select category</option>
								<option value="gaming">Gaming</option>
								<option value="proffesional">Proffesional</option>
								<option value="student">Student</option>
							</select>
						</div>
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="tag">Tag</label>
							<select class="custom-select tm-select-accounts" id="tag" name="tag">
								<option selected disabled>Select tag</option>
								<option value="new">New Arrival</option>
								<option value="popular">Most Popular</option>
								<option value="trending">Trending</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="price">Price</label>
							<input id="price" name="price" value="<?php echo $rowp['price'];?>" type="number" min="10000" value="10000" step="any"
								class="form-control validate hasDatepicker" data-large-mode="true" />
						</div>
						<div class="form-group mb-3 col-xs-12 col-sm-6">
							<label for="stock">Units In Stock</label>
							<input id="stock" name="units" value="<?php echo $rowp['units'];?>" type="number" min="5" value="5" step="any"
								class="form-control validate" required />
						</div>
					</div>
					<div class="col-12">
						<div class="single-contact-btn pb-3">
							<input class="btn contact-btn" type="submit" Value="Update Product" name="editProduct" />
						</div>
					</div>
				</form>
				<?php }?>
			</div>
		</div>
	</div>

	<?php include 'footer.php';?>
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