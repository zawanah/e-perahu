<?php include('../Admin/Admin_Add_Driver/server.php');

?>

<?php $conn = mysqli_connect("localhost", "root", "", "registration");
                  // Check connection
                  if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT username, fname, lname, email, reg_no FROM driver WHERE id= '1'";
                  $result = $conn->query($sql);

?>

<?php $conn2 = mysqli_connect("localhost", "root", "", "registration");
                  // Check connection
                  if ($conn2->connect_error) {
                  die("Connection failed: " . $conn2->connect_error);
                  }
                  $sql2 = "SELECT username, fname, lname, email, reg_no FROM driver WHERE id= '2'";
                  $result2 = $conn2->query($sql2);

?>

<?php $conn3 = mysqli_connect("localhost", "root", "", "registration");
                  // Check connection
                  if ($conn3->connect_error) {
                  die("Connection failed: " . $conn3->connect_error);
                  }
                  $sql3 = "SELECT username, fname, lname, email, reg_no FROM driver WHERE id= '3'";
                  $result3 = $conn3->query($sql3);

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
                    <a class="nav-brand" href="indexuser.php"><img src="img/e-perahu.png" alt=""></a>

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
                                        <li><a href="speakers.php">- drivers</a></li>
                                        <li><a href="schedule.php">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="User_Reservation/User_Reservation.php">Reservation</a></li>
                                <li><a href="blog.php">About Us</a></li>
                                <li><a href="contact.php">Feedback</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="speakers.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    

    
<!-- Our Schedule Area Start -->
    <section class="bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/backticket.jpg);" class="our-schedule-area">
        <!-- Heading -->
            <div style="padding-top: 180px;">
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h2><font color="white">E-Perahu Drivers</font></h2>
                        <h4><font color="white">Top Rated Drivers</font></h4>
                    </div>
                </div>
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
                                        <div style="background-color: #ffffff; " class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <?php if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {

                                                    
                                                    echo "<p> <h6>" . $row["username"] . "</h6>
                                                    <p>" . $row["fname"] ."&nbsp;". $row["lname"] ."</p>
                                                    <p>" . $row["email"] . "</p>

                                                    </p>";
                                                    }
                                                    } else { echo "0 results"; }
                                                    $conn->close();
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="driverinformation.php" class="btn confer-btn">Show Profile <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div style="background-color: #ffffff; " class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <?php if ($result2->num_rows > 0) {
                                                    // output data of each row
                                                    while($row2 = $result2->fetch_assoc()) {

                                                    
                                                    echo "<p> <h6>" . $row2["username"] . "</h6>
                                                    <p>" . $row2["fname"] . "&nbsp;" . $row2["lname"] . "</p>
                                                    <p>" . $row2["email"] . "</p>

                                                    </p>";
                                                    }
                                                    } else { echo "0 results"; }
                                                    $conn2->close();
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="driverinformation2.php" class="btn confer-btn">Show Profile <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div style="background-color: #ffffff; " class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <?php if ($result3->num_rows > 0) {
                                                    // output data of each row
                                                    while($row3 = $result3->fetch_assoc()) {

                                                    
                                                    echo "<p> <h6>" . $row3["username"] . "</h6>
                                                    <p>" . $row3["fname"] ."&nbsp;". $row3["lname"] . "</p>
                                                    <p>" . $row3["email"] . "</p>

                                                    </p>";
                                                    }
                                                    } else { echo "0 results"; }
                                                    $conn3->close();
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="driverinformation3.php" class="btn confer-btn">Show Profile <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div style="padding-bottom: 50px;" class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="moredrivers.php" class="btn confer-btn">View More Drivers <i class="zmdi zmdi-long-arrow-right"></i></a>
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

<!--table End-->


    <!-- Footer Area Start -->
    <!-- <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0"> -->
        <!-- Main Footer Area -->
        <!-- <div class="main-footer-area"> -->
            <!-- <div class="container">
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