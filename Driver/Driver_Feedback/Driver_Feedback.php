<?php include('../../User/server.php');

                

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ratings and Feedback from Customers</title>

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
                    <a class="nav-brand" href="../Driver_Dashboard/Driver_dashboard.php"><img src="img/e-perahu.png" alt=""></a>

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
                            <!-- Dashboard Button -->
                            </br>
                            <a href="../Driver_Dashboard/Driver_dashboard.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Dashboard <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Our Ratings and Feedbacks Area Start -->
    <section class="bg-img bg-gradient-overlay" style="padding-top: 140px;" class="our-schedule-area">
        <!-- Heading -->
            <div style="padding-top: 30px;">
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4><font color="white">Ratings and Feedback</font></h4>
                    </div>
                </div>
            </div>
        <div class="container" style="padding-bottom: 80px;">
            <div class="row">
                <div class="col-12">

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <?php 
                            $conn = mysqli_connect("localhost", "root", "", "registration");
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT username, firstname, lastname, rate, feedback, PersonID FROM orders where PersonID = " . $_SESSION['id'] . "";
                            $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row1 = $result->fetch_assoc()) {
                            echo "<div class='single-tab-content'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div style='background-color: #ffffff;' class='single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp' data-wow-delay='300ms'>
                                                    

                                                <div class='single-schedule-tumb-info d-flex align-items-center'>
                                                    <div class='single-schedule-info'>

                                                    
                                                        <p> <h6>" . $row1["username"] . "</h6>
                                                        <p>" . $row1["firstname"] ."&nbsp;". $row1["lastname"] ."</p>
                                                        </p>
                                                    
                                                    </div>
                                            </div>
                                            <div class='schedule-time-place'>
                                                <h6 style='text-align:center;'>" . $row1["rate"] . "/5 </h6>
                                                <br>
                                                <p style='text-align:center;'>" . $row1["feedback"] . " </p>
                                            </div>
                                        </div>" ;
                                                    } echo "</div>";
                                                    } else { echo "0 results"; }
                                                    $conn->close();
                                        ?>
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
    <!-- Our Driver Area End -->

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
