<?php include('../Driver_Login/server.php');

    // // if user is not logged in, they cannot access this page
    // if (empty($_SESSION['username'])) {
    //     header('location: ../Driver_Login/Driver_Login.php');
    // }

?>
<?php
    $sql = "SELECT availability FROM driver WHERE username = '" . $_SESSION['username'] . "'";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Driver Dashboard</title>

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
                    <a class="nav-brand" href="Driver_dashboard.php"><img src="img/e-perahu.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" style="">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <!-- Rounded switch -->
                            <form method="post">
                                <div style="text-align: center;">
                                    <label class="switch">
                                        <input type="checkbox" name="availability" value="Online" onclick="this.form.submit();"/>
                                        <label>Online</label>
                                        <span class="slider round"></span>
                                        <input type="checkbox" name="availability" value="Offline" onclick="this.form.submit();"/>
                                        <label>Offline</label>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <!-- <label class="switch">
                                <input type="checkbox" name="availability" value="Online" onclick="this.form.submit();"/>
                                <span class="slider round"></span>
                                <label class="switch">Online</label>
                                <input type="checkbox" name="availability" value="Offline" onclick="this.form.submit();"/>
                                <span class="slider round"></span>
                                <label class="switch">Offline</label>
                                </label> -->
                            </form>
                            <!-- Logout Button -->
                            </br>
                            <div style="text-align: center;">
                            <a href="Driver_dashboard.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Our Blog Area Start -->
    <div style="padding-top:150px;" class="our-blog-area section-padding-100">
        <h4 style="text-align: center;" class="text-warning">You are now <?php echo $row['availability']; ?></h4>
        <div style="padding-top: 30px;" class="container">
            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="img/teamwork.png" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="../Driver_ListOfCustomer/Driver_ListOfCustomer.php">Customer List</a>
                            <!-- Post Meta -->

                            <p>List of customer reservation</p>
                        </div>
                        <div class="blog-btn">
                            <a href="../Driver_ListOfCustomer/Driver_ListOfCustomer.php"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="img/good-review.png" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="../Driver_Feedback/Driver_Feedback.php">View Feedback</a>
                            <!-- Post Meta -->

                            <p>Viewing customer feedback</p>
                        </div>
                        <div class="blog-btn">
                            <a href="../Driver_Feedback/Driver_Feedback.php"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Our Blog Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Footer Logo -->
                            <a href="Driver_dashboard.php" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>


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
