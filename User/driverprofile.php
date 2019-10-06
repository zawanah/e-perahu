<?php include('../Admin/Admin_Add_Driver/server.php');

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
                                        <li><a href="">- Schedule</a></li>
                                        <li><a href="ticketprice.php">- Ticket Price</a></li>
                                        <li><a href="drivers.php">- driver</a></li>
                                        <li><a href="schedule.php">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="">Ticket History</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                            </ul>

                            <a href="indexuser.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    


    <!-- header section -->
<section style="background-color: white; background-image: url(img/backprofile.jpg);" class="bg-img">
    <?php 

        $sql = "SELECT fname, lname, username, email, phone_no, reg_no, availability FROM driver WHERE id = '" . $_SESSION['id'] . "'";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="wow fadeInUp" style="padding-top: 180px; padding-bottom: 50px;">
        <div class="">
            <div class="col-md-12 col-sm-12">
                <h1 class="" style="text-align: center; color: black ;">Driver Profile</h1>
            </div>
        </div>
    </div>

<!-- about and skills section -->
<section class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="about bg-gradient-overlay wow fadeInUp">
                <h2>Fullname</h2>
                <!-- <h2></h2> -->
                </br>
                </br>
                <h4 style="text-align: center;" class="white"><?php echo $row['fname']; ?>&nbsp;<?php echo $row['lname']; ?></h4>
            </div>
        </div>
        <!-- <div class="col-md-6 col-sm-12">
            <div class="skills bg-gradient-overlay wow fadeInUp" style="background-color: #ffffff; border-radius: 15px;">
                <h2 style="color: #ffffff;">Skills</h2>
                <strong style="color: #ffffff;">PHP MySQL</strong>
                <span style="color: #ffffff;" class="pull-right">70%</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                    </div>
                <strong style="color: #ffffff;">UI/UX Design</strong>
                <span style="color: #ffffff;" class="pull-right">85%</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                    </div>
                <strong style="color: #ffffff;">Bootstrap</strong>
                <span style="color: #ffffff;" class="pull-right">95%</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                    </div>
            </div>
        </div> -->
        <div  class="col-md-6 col-sm-12">
            <div class="about bg-gradient-overlay wow fadeInUp">
                <h2>Boat Registration No.</h2>
                <!-- <h2></h2> -->
                </br>
                </br>
                <h4 style="text-align: center;" class="white"><?php echo $row['reg_no']; ?></h4>
            </div>
        </div>
    </div>
</section>

<!-- education and languages -->
<section class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="education bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2 class="white">Experience</h2>
                    <div class="education-content">
                            <div class="education-school">
                                <h5>2001 - Present</h5>
                            </div>
                        <p class="education-description white">In lacinia leo sed quam feugiat, ac efficitur dui tristique. Ut venenatis, odio quis cursus egestas, nulla sem volutpat diam, ac dapibus nisl ipsum ut ipsum. Nunc tincidunt libero non magna placerat elementum.</p>
                    </div>
            </div>
        </div>
        <div  class="col-md-4 col-sm-12">
            <div class="languages bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2>Status</h2>
                </br>
                    <ul style="color: white;">
                        <h4 style="color: #fff; text-align: center;"><?php echo $row['availability']; ?> now</h4>
                    </ul>
            </div>
        </div>
    </div>
</section>

<!-- contact and experience -->
<section class="container" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="contact bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2>Contact</h2>
                    <p class="white"><i class="fa fa-map-marker"></i> Bandar Seri Begawan, Brunei Darussalam</p>
                    <p class="white"><i class="fa fa-phone"></i> +673<?php echo $row['phone_no']; ?></p>
                    <p class="white"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></p>
                    <p class="white"><i class="fa fa-globe"></i> www.e-perahu.com</p>
            </div>
        </div>
    </div>
</section>
</section>


        

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
