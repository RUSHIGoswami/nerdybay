<?php
session_start();
if ($_SESSION['logincheck'] != true) {
    header('Location: login.php');
}
if (isset($_GET['name'])) {
    include 'config/constants.php';
    $pname = $_GET['name'];
    $selectp = "SELECT * FROM `products` WHERE `pname` = '$pname'";
    $selects = "SELECT * FROM `product_specs` WHERE `pname` = '$pname'";
    $resultp = mysqli_query($conn, $selectp);
    $results = mysqli_query($conn, $selects);
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
    <title>NerdyBay</title>
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

    <style>
        table {
            table-layout: fixed;
            width: 100%;
        }

        td {
            width: 25%;
        }

        .top-right {
            position: absolute;
            top: 20px;
            /* -webkit-transform: rotate(-45deg);
			-moz-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			-o-transform: rotate(-45deg); */
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Single product page Start -->
    <section class="layout_padding">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 product_box1 ">
                <?php
                while (($rowp = mysqli_fetch_assoc($resultp)) && ($rows = mysqli_fetch_assoc($results))) {
                ?>
                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-4 mt-1">
                            <img class="img-fluid img-responsive rounded product-image" src="assets/productimgs/<?php echo $rowp['product_img']; ?>" alt="" style="height: 350px; width: 400px; position: relative;">
                        </div>
                        <div class="col-md-5 mt-1">
                            <h2 style="color: black;"><?php echo $rowp['pname']; ?></h2>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2">
                                    <i class="fa fa-star" style="color: red;"></i>
                                    <i class="fa fa-star" style="color: red;"></i>
                                    <i class="fa fa-star" style="color: red;"></i>
                                    <i class="fa fa-star-half-o" style="color: red;"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span style="color: black;">(269)</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1">
                                <br>
                                <span style="color: black;"><b><?php echo $rowp['category']; ?></b><br><br></span>
                                <span style="color: black;"><b><?php echo $rowp['tag']; ?></b><br><br></span>
                                <span style="color: black;">RAM: <?php echo $rows['ram']; ?><br><br></span>
                                <span style="color: black;">Storage: <?php echo $rows['storage']; ?><br><br></span>
                                <span style="color: black;">Processor: <?php echo $rows['cpu']; ?><br><br></span>
                                <span style="color: black;">GPU: <?php echo $rows['gpu']; ?><br><br></span>
                            </div>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex align-items-center">
                                <h4 class="mr-1" style="color: rgb(0, 81, 255);"><b>&#8377; <?php echo $rowp['price']; ?>/-</b>&nbsp;&nbsp;</h4>
                            </div>
                            <h6 class="text-success">Free shipping</h6><br>
                            <div class="d-flex flex-column mt-4">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="single-cod-btn">
                                                <a class="btn cod-btn" href="#">COD Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table width="80%">
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 20px;">
                                    <h3><b> Key Specs </b></h3>
                                </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr align="left">
                                <td><i class="fa fa-windows" style="padding-left: 20px;"></i><?php echo $rows['os']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 20px;"> <b> Build and Performance </b>
                                    <p><?php echo $rowp['description']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                        </table>
                        <table width="80%">
                            <tr>
                                <td colspan="5">
                                    <hr style="width:1fr;">
                                </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr align="center">
                                <td><b> Performance </b></td>
                                <td> | </td>
                                <td><b> Design </b></td>
                                <td> | </td>
                                <td><b> Storage </b></td>
                            </tr>
                            <tr align="center">
                                <td><?php echo $rows['cpu']; ?></td>
                                <td> | </td>
                                <td><?php echo $rows['dimensions']; ?></td>
                                <td> | </td>
                                <td><?php echo $rows['storage']; ?></td>
                            </tr>
                            <tr align="center">
                                <td><?php echo $rows['gpu']; ?></td>
                                <td> | </td>
                                <td><?php echo $rows['display']; ?></td>
                                <td> | </td>
                                <td> - </td>
                            </tr>
                            <tr align="center">
                                <td><?php echo $rows['ram']; ?>&nbsp;RAM</td>
                                <td> | </td>
                                <td><?php echo $rows['weight']; ?></td>
                                <td> | </td>
                                <td> - </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <hr style="width:1fr;">
                                </td>
                            </tr>
                        </table>
                        <table width="80%">
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr align="center">
                                <td> <i class="fa fa-wifi"> Wifi </i> </td>
                                <td> <i class="fa fa-bluetooth"> Bluetooth </i> </td>
                                <td> <i class="fa fa-camera"> Web Camera </i> </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr align="center">
                                <!-- <td> <i class="fa fa-laptop"> Slim 18.9 mm </i> </td> -->
                                <td> <i class="fa fa-usb"> C-port</i></td>
                                <td> <i class="fa fa-usb"> 3 USB Ports </i> </td>
                                <td> <i class="fa fa-barcode"> HDMI Port </i> </td>
                            </tr>
                            <tr>
                                <td> <br> </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                        </table>

                    </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <!-- Single product page End -->


    <!-- Footer Start-->
    <?php include 'footer.php'; ?>
    <!-- Footer End-->




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