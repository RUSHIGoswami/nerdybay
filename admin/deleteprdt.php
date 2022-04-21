<?php
    include '../config/constants.php';
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
    if (isset($_GET['name'])) {
        $pname = $_GET['name'];
        $deletes = "DELETE FROM `product_specs` WHERE pname='$pname'";
        $deletep = "DELETE FROM `products` WHERE pname='$pname'";
        $result1 = mysqli_query($conn, $deletes);
        $result = mysqli_query($conn, $deletep);
        if($result1 && $result) {
            header('Location: products.php');
        }
    }
    else {
        echo "Didn't get the Product name";
    }
    
?>