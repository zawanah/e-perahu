<?php include('../Admin/Admin_Add_Driver/server.php');

?>

<?php $conn = mysqli_connect("localhost", "root", "", "registration");
                  // Check connection
                  if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT username, fname, lname, email, reg_no FROM driver WHERE id= '3'";
                  $result = $conn->query($sql);

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

    


    <!-- header section -->
<section style="background-color: white;">
    <div class="wow fadeInUp" style="padding-top: 180px; padding-bottom: 50px;">
        <div class="">
            <div class="col-md-12 col-sm-12">
                <h1 class="" style="text-align: center; color: black ;">Hi, I am <?php if ($result->num_rows > 0) {
                                                                                            while($row = $result->fetch_assoc()) { 
                                                                                                echo $row["fname"];
                                                                                            }
                                                                                        } else { echo "0 results"; }
                                                                                        $conn->close(); 
                                                                                    ?> </h1>
            </div>
        </div>
    </div>

<!-- about and skills section -->
<section class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="about bg-gradient-overlay wow fadeInUp">
                <h3 class="white">Easy Profile</h3>
                <h2>Bootstrap v3.3.5</h2>
                <p class="white">This easy HTML profile is brought to you by templatemo website. There are 4 color themes, <a href="index-green.html">Green</a>, <a href="index.html">Blue</a>, <a href="index-gray.html">Gray</a>, and <a href="index-orange.html">Orange</a>. Sed vitae dui in neque elementum tempor eu id risus. Phasellus sed facilisis lacus, et venenatis augue.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
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
        </div>
    </div>
</section>

<!-- education and languages -->
<section class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="education bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2 class="white">Education</h2>
                    <div class="education-content">
                        <h4 class="">New Web Design</h4>
                            <div class="education-school">
                                <h5>School of Media</h5><span></span>
                                <h5>2030 January - 2034 December</h5>
                            </div>
                        <p class="education-description white">In lacinia leo sed quam feugiat, ac efficitur dui tristique. Ut venenatis, odio quis cursus egestas, nulla sem volutpat diam, ac dapibus nisl ipsum ut ipsum. Nunc tincidunt libero non magna placerat elementum.</p>
                    </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="languages bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2>Languages</h2>
                    <ul style="color: white;">
                        <li>Myanmar / Thai</li>
                        <li>English / Spanish</li>
                        <li>Chinese / Japanese</li>
                        <li>Arabic / Hebrew</li>
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
                    <p class="white"><i class="fa fa-map-marker"></i> 123 Rama IX Road, Bangkok</p>
                    <p class="white"><i class="fa fa-phone"></i> 010-020-0890</p>
                    <p class="white"><i class="fa fa-envelope"></i> easy@company.com</p>
                    <p class="white"><i class="fa fa-globe"></i> www.company.com</p>
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="experience bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2 class="white">Experiences</h2>
                    <div class="experience-content">
                        <h4>Website Development</h4>
                        <h5>New Media Company</h5><span></span>
                        <h5>2035 January - 2036 April</h5>
                        <p class="education-description white">Cras porta tincidunt sem, in sollicitudin lorem efficitur ut. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                    </div>
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
