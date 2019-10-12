<?php include('server.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>E-Perahu - Ticket Price</title>

    <!-- Favicon -->
    <link rel="icon" href="img/e-perahu.png">

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
                    <a class="nav-brand" href="index.php"><img src="img/e-perahu.png" alt=""></a>

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
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">Information</a>
                                    <ul class="dropdown">
                                        <li><a href="nlticketprice.php">- Ticket Price</a></li>
                                        <li><a href="#">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="aboutus.php">About Us</a></li>
                            </ul>

                            <!-- Login Button -->
                            <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



        <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay jarallax" style="padding-top: 150px; background-image: url(img/bg-img/backticket.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Choose a Ticket</p>
                        <h4>Ticket Pricing</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">One-Way Trip</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/oneway.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>1</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> BND 1 per person</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Two-Way Trip</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/twoway.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>2</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> BND 2 per person</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Kampong Ayer Tour</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/village.jpg" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>7</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> BND 20 for 3 person</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Pulau Chermin Tour</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/island.jpg" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>14</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> BND 40 for 3 person</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Istana Nurul Iman Tour</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/istana.jpg" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>11</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Jong Batu Tour included</p>
                            <p><i class="zmdi zmdi-check"></i> Proboscis Monkey Tour included</p>
                            <p><i class="zmdi zmdi-check"></i> BND 30 for 3 person</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Full Tour</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/bino.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>BND</span>32</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Kampong Ayer, Pulau Chermin, Istana Nurul Iman Tour in one go</p>
                            <p><i class="zmdi zmdi-check"></i> BND 90 for 3 person</p>
                        </div>
                    </div>
                </div>
                <!-- Booking Btn -->
                <div class="col-12">
                    <div style="padding-bottom: 50px;" class=" text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                        <a href="login.php" class="confer-btn">Sign up/Log in for reservation <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

     <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area" >
            <div class="container">
                <div class="row" style="display: inline-block;" >


                    <!-- Single Footer Widget Area -->
                    <!-- <div class="col-12 col-sm-6 col-lg-3" > -->
                        <div class="single-footer-widget mb-60" style="text-align: center;" >
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i> Bandar Seri Begawan</p>
                                <p><i class="zmdi zmdi-phone"></i> (+673) 1234567</p>
                                <p><i class="zmdi zmdi-email"></i> e-perahu@gmail.com</p>
                                <p><i class="zmdi zmdi-globe"></i> www.e-perahu.com</p>
                            </div>
                        </div>
                    <!-- </div> -->


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
