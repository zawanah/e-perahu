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
                    <a class="nav-brand" href="./indexuser.php"><img src="./img/core-img/logo.png" alt=""></a>

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
                                        <li><a href="index.php">- Schedule</a></li>
                                        <li><a href="about.php">- Ticket Price</a></li>
                                        <li><a href="speakers.php">- driver</a></li>
                                        <li><a href="schedule.php">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="User_Reservation/User_Reservation.php">Reservation</a></li>
                                <li><a href="blog.php">About Us</a></li>
                                <li><a href="contact.php">Feedback</a></li>
                            </ul>

                            <!-- Logout Button -->
                            <a href="profile.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/backprofile.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">My Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


    <section class="home_banner_area" style="background-image: #ffffff">
        <div class="container box_1620">
                <div class="banner_inner d-flex align-items-center">
                    <div class="banner_content">
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/user.png" alt="">
                            </div>
                            <div class="media-body">

                                <div class="personal_text">

                                    <?php
                                    $sql = "SELECT firstname, lastname, username, email FROM driver WHERE username = '" . $_SESSION['username'] . "'";

                                    $result = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_array($result);

                                    echo "Hello, " . $row['firstname'] . " ". $row['lastname'] ." ". $row['email'] ." (" . $row['username'] . ").";

                                      ?>

                                    

                                

                                        <!-- <li><i class="lnr lnr-calendar-full"></i> 31st December, 1992</a></li>
                                        <li><i class="lnr lnr-phone-handset"></i> 44 (012) 6954 783</a></li>
                                        <li></li>
                                        <li><i class="lnr lnr-home"></i> Santa monica bullevard</a></li> -->
                                        <!-- Button -->
                                        <div class="col-12">
                                            <a href="editprofile.php"><button type="submit" class="btn confer-btn">Edit My Profile <i class="zmdi zmdi-long-arrow-right"></i></button></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


        <!-- Footer Area Start -->
    <!-- <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0"> -->
        <!-- Main Footer Area -->
        <!-- <div class="main-footer-area">
            <div class="container">
                <div class="row"> -->
                    <!-- Single Footer Widget Area -->
                    <!-- <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60"> -->

                            <!-- Widget Title -->
                            <!-- <h5 class="widget-title">Contact</h5> -->

                            <!-- Contact Area -->
                            <!-- <div class="footer-contact-info">
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
    </footer> -->
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
