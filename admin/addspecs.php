<?php
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
		include '../config/constants.php';
		$pname = $_SESSION['pname'];
        $CPU = $_SESSION['CPU'];
		$GPU = $_SESSION['GPU'];
		$RAM = $_SESSION['RAM'];
		$OS = $_SESSION['OS'];
		$Storage = $_SESSION['Storage'];
		$Weight = $_SESSION['Weight'];
		$Display = $_SESSION['Display'];
		$Dimensions = $_SESSION['Dimensions'];
		$product_specs = "INSERT INTO `product_specs` (`pname`, `cpu`, `gpu`, `ram`, `os`, `storage`, `weight`, `display`, `dimensions`) VALUES ('$pname', '$CPU', '$GPU', '$RAM', '$OS', '$Storage', '$Weight', '$Display', '$Dimensions')";
		$result = mysqli_query($conn, $product_specs);
		if($result){
			header("Location: products.php");
		}
?>