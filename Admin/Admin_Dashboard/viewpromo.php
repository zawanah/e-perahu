<?php include('promo.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>


                            <!-- Logout Button -->
                            <a href="Admin_Dashboard.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(../Admin_Dashboard/img/pt1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">View Promo Details</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
<br>
<!--promo image and details start-->



    <section class="" style=" padding-top: 70px; background-image: #ffffff">
        <!-- <div class="box_1620"> -->
                <!-- <div class="banner_inner d-flex align-items-center"> -->
                    <!-- <div class="banner_content"> -->
                        <!-- <div class="media"> -->
                            <div class="displayPic" style="text-align: center; font-size: 40px" >
                                <img src="img/e-perahu-icon.png" alt="" style="width: 400px; height: 400px; margin: auto;"> <br/>


                            </div> <br>
                            <div class="media-body" style="text-align: center;">

                                <div class="personal_text">

                                    <?php
                                    $sql = "SELECT promo_title, promo_text, promo_location, promo_image, promo_start FROM promotion WHERE promo_id ='" . $_SESSION['promo_id'] . "'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($result);

                                    echo "Location: ". $row['promo_location'] . "Description: ". $row['promo_text'] . "<br/>" . "Location: ". $row['promo_location'] . "";

                                      ?>






                                        <!-- Button -->
                                        <div class="col-12">
                                            <br>
                                            <a href="promo.php"><button type="submit" class="btn confer-btn">Back to promo list<i class="zmdi zmdi-long-arrow-right"></i></button></a>
                                        </div>

                                </div>



                            </div>
                      <!--   </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
    </section>




<br>
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">

                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i> Bandar Seri Begawan</p>
                                <p><i class="zmdi zmdi-phone"></i> (+673) 2123456</p>
                                <p><i class="zmdi zmdi-email"></i> -e-perahu@gmail.com</p>
                                <p><i class="zmdi zmdi-globe"></i> www.e-perahu.net</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
