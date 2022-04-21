<?php
    session_start();
	if ($_SESSION['loginCheck'] != true) {
		header('Location: adminlogin.php');
	}
    include '../config/constants.php';
    $select = "SELECT * FROM `products`";
    $selectspec= "SELECT * FROM `product_specs`";
    $result = mysqli_query($conn, $select);
    $result1 = mysqli_query($conn, $selectspec);
    
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
    <title>Admin | All Products</title>
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

    <style>
        table {
            table-layout: fixed;
            width: 100%;
            border: 1px solid black;
        }

        th,
        td {
            text-align: center;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
        }
    </style>
</head>

<body>
<!-- Navbar -->
	<?php
		include 'adminnav.php';
		?>
    <!-- Product grid -->
    <section class="layout_padding">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 product_box1">
                <table>
                    <tr>
                        <th>Product No.</th>
                        <th>Product Name</th>
                        <th>Product image</th>
                        <th>RAM</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Price</th>
                        <th>Units</th>
                        <th colspan="2">Operations</th>
                    </tr>
                    <?php
                    while(($rows = mysqli_fetch_assoc($result)) && ($row = mysqli_fetch_assoc($result1))){
                        ?>
                    <tr>
                        <td><?php echo $rows['pid'];?></td>
                        <td><?php echo $rows['pname'];?></td>
                        <td><img src="../assets/productimgs/<?php echo $rows['product_img'];?>" alt=""></td>
                        <td><?php echo $row['ram'];?></td>
                        <td><?php echo $rows['category'];?></td>
                        <td><?php echo $rows['tag'];?></td>
                        <td><?php echo $rows['price'];?></td>
                        <td><?php echo $rows['units'];?></td>
                        <td><a href="editprdt.php?name=<?php echo $row['pname'];?>">Edit</a></td>
                        <td><a href="deleteprdt.php?name=<?php echo $rows['pname'];?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>



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