<?php include('server.php');

// if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>E-Perahu - User Profile</title>

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
                                        <li><a href="promo.php">- Promotions</a></li>
                                    </ul>
                                </li>
                                <li><a href="tickethistory.php">Ticket History</a></li>
                                <li><a href="blog.php">About Us</a></li>
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




    <!-- header section -->
<section style="background-color: white; background-image: url(img/backprofile.jpg);" class="bg-img bg-gradient-overlay">
    <?php

        $sql = "SELECT firstname, lastname, username, email, description FROM users WHERE username = '" . $_SESSION['username'] . "'";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="wow fadeInUp" style="padding-top: 180px; padding-bottom: 50px;">
        <div class="">
            <div class="col-md-12 col-sm-12">
                <h1 class="white" style="text-align: center;">Your Profile</h1>
            </div>
        </div>
    </div>

<!-- about and skills section -->
<section class="container">
    <div style="padding-bottom: 20px;" class="col-12 wow fadeInUp">
        <br>
        <a href="editprofile.php"><button type="submit" class="btn confer-btn">Edit My Profile <i class="zmdi zmdi-long-arrow-right"></i></button></a>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div style="background-color: #fff; border-radius: 25px;" class="about wow fadeInUp">
                <h2 class="">Your username</h2>
                </br>
                </br>
                <h4 style="text-align: center;"><?php echo $row['username']; ?></h4>
            </div>
        </div>
        <div  class="col-md-6 col-sm-12">
            <div style="background-color: #fff; border-radius: 25px;" class="about wow fadeInUp">
                <h2 class="">Fullname</h2>
                </br>
                </br>
                <h4 style="text-align: center;"><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?></h4>
            </div>
        </div>
    </div>
</section>

<!-- education and languages -->
<section class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="education wow fadeInUp" style="background-color: #fff; border-radius: 25px;">
                <h2 class="">Your Description</h2>
                <br>
                <br>
                    <div class="education-content">
                            <div class="education-school">
                                <h5><?php echo $row['description']; ?></h5>
                            </div>
                    </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="contact wow fadeInUp" style="background-color: #fff; border-radius: 25px;">
                <h2 class="">Contact</h2>
                    <!-- <p style="color: #000;"><i class="fa fa-map-marker"></i> Bandar Seri Begawan, Brunei Darussalam</p> -->
                    <!-- <p style="color: #000;"><i class="fa fa-phone"></i></p> -->
                    <p style="color: #000;"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></p>
                    <!-- <p style="color: #000;"><i class="fa fa-globe"></i></p> -->
            </div>
        </div>
    </div>
</section>

<!-- contact and experience -->
<section class="container" style="padding-bottom: 50px;">
    <div class="row">

    </div>
</section>
</section>


        <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-12">
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
