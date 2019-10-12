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
    <title>About us</title>

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
                    <a class="nav-brand" href="./indexuser.php"><img src="img/e-perahu.png" alt=""></a>

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
                                <li class="active"><a href="indexuser.php">Home</a></li>
                                <li><a href="#">Information</a>
                                    <ul class="dropdown">
                                        <li><a href="profile.php">- My Profile</a></li>
                                        <li><a href="ticketprice.php">- Ticket Price</a></li>
                                        <li><a href="drivers.php">- driver</a></li>
                                        <li><a href="promo.php">- Promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="tickethistory.php">Ticket History</a></li>
                                <li><a href="aboutuslogin.php">About Us</a></li>
                            </ul>

                            <!-- Logout Button -->
                            <a href="aboutuslogin.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

   <!-- About Us Area Start -->
    <section style="padding-top: 150px;" class="our-schedule-area bg-img bg-gradient-overlay section-padding-80">
        <div style="padding-bottom: 30px;" class="col-md-12 col-sm-12">
                <h1 class="wow fadeInUp" style="text-align: center;color: #fff;">About us</h1>
   <?php include('successcontactus.php'); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div style="background-color: #fff;" class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                                    <p style="text-align: center;color: #000;">The product is a website based solution. It acts as an information and service platform regarding the water taxi in Brunei Darussalam. The information that has been provided are driver information etc. The services we provide a relevant tool that will be used to make the process easier such as reservation system, online payment, registration etc.</p>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About Us Area Start -->

    <!-- Contact Us Area Start -->
        <div style="padding-bottom: 30px; padding-top: 30px;" class="col-md-12 col-sm-12">
                <h1 class="wow fadeInUp" style="text-align: center;color: #fff">Contact Us</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div style="background-color: #fff;" class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                                    <div class="contact_form">
                            <form method="post">
                                <?php
                                    $sql = "SELECT firstname, lastname, email FROM users WHERE username = '" . $_SESSION['username'] . "'";

                                    $result = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_array($result); 
                                ?>
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input style="color: #000;" type="text" class="form-control mb-30" name="firstname" id="name" placeholder="First Name" value="<?php echo $row['firstname']; ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input style="color: #000;" type="text" class="form-control mb-30" name="lastname" id="name-2" placeholder="Last Name" value="<?php echo $row['lastname']; ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input style="color: #000;" type="email" class="form-control mb-30" name="email" id="email" placeholder="Your E-mail" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input style="color: #000;" type="text" class="form-control mb-30" name="phonenumber" placeholder="Your Phone Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea style="color: #000;" name="message" class="form-control mb-30" id="message" cols="30" rows="12" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" name="contactus" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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