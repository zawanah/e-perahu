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
    <title>Confer - Conference Event HTML Template</title>

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
                    <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

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
                                        <li><a href="profile.php">- My Profile</a></li>
                                        <li><a href="about.php">- Schedule</a></li>
                                        <li><a href="aboutnologin.php">- Ticket Price</a></li>
                                        <li><a href="tickets.php">- Promotion</a></li>
                                        
                                        
                                        
                                    </ul>
                                </li>
                                <li><a href="login.php">Reservation</a></li>
                                <li><a href="blog.php">About Us</a></li>
                                <li><a href="contact.php">Feedback</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Log in <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Ticket Price</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ticket Price</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

        <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(img/bg-img/14.jpg);">
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <a href="login.php" class="btn confer-btn w-100 mb-30">Book Now <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Kampong Ayer, Pulau Chermin, Istana Nurul Iman Tour in one go</p>
                            <p><i class="zmdi zmdi-check"></i> BND 90 for 3 person</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

        <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i> 184 Main Collins Street</p>
                                <p><i class="zmdi zmdi-phone"></i> (226) 446 9371</p>
                                <p><i class="zmdi zmdi-email"></i> confer@gmail.com</p>
                                <p><i class="zmdi zmdi-globe"></i> www.confer.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Workshops</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">Microsoft Excel Basics</a></li>
                                <li><a href="#">Forum Speaker Series</a></li>
                                <li><a href="#">Tedx Moscow Conference</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Gallery</h5>

                            <!-- Footer Gallery -->
                            <div class="footer-gallery">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="img/bg-img/21.jpg" class="single-gallery-item"><img src="img/bg-img/21.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/22.jpg" class="single-gallery-item"><img src="img/bg-img/22.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/23.jpg" class="single-gallery-item"><img src="img/bg-img/23.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/24.jpg" class="single-gallery-item"><img src="img/bg-img/24.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/25.jpg" class="single-gallery-item"><img src="img/bg-img/25.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/26.jpg" class="single-gallery-item"><img src="img/bg-img/26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                            </ul>
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
