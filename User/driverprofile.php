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
    <title>E-Perahu - Driver Profile</title>

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
                                        <li><a href="ticketprice.php">- Ticket Price</a></li>
                                        <li><a href="drivers.php">- driver</a></li>
                                        <li><a href="#">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="tickethistory.php">Ticket History</a></li>
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

        $sql = "SELECT id, fname, lname, username, email, phone_no, reg_no, availability FROM driver WHERE id = '" . $_SESSION['id'] . "'";

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
                <h2 class="white">Fullname</h2>
                <!-- <h2></h2> -->
                </br>
                </br>
                <h4 style="text-align: center;"><?php echo $row['fname']; ?>&nbsp;<?php echo $row['lname']; ?></h4>
            </div>
        </div>
        <div  class="col-md-6 col-sm-12">
            <div class="about bg-gradient-overlay wow fadeInUp">
                <h2 class="white">Boat Registration No.</h2>
                </br>
                </br>
                <h4 style="text-align: center;"><?php echo $row['reg_no']; ?></h4>
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
                <br>
                <br>
                    <div class="education-content">
                            <div class="education-school">
                                <h5>2001 - Present</h5>
                            </div>
                    </div>
            </div>
        </div>
        <div  class="col-md-4 col-sm-12">
            <div class="languages bg-gradient-overlay wow fadeInUp" style="border-radius: 15px;">
                <h2 class="white">Status</h2>
                </br>
                    <ul>
                        <h4 style="text-align: center;"><?php echo $row['availability']; ?> now</h4>
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
                <h2 class="white">Contact</h2>
                    <p style="color: #000;"><i class="fa fa-map-marker"></i> Bandar Seri Begawan, Brunei Darussalam</p>
                    <p style="color: #000;"><i class="fa fa-phone"></i> +673<?php echo $row['phone_no']; ?></p>
                    <p style="color: #000;"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></p>
                    <p style="color: #000;"><i class="fa fa-globe"></i> www.e-perahu.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Ratings and Feedbacks Area Start -->
    <section class="bg-img bg-gradient-overlay" style="" class="our-schedule-area">
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
                            $sql = "SELECT firstname, lastname, username, rate, feedback, personid FROM orders where personid = " . $_SESSION['id'] . "";
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
    <!-- Our Ratings and Feedback Area End -->

<!-- Contact Us Area Start -->
    <section style="padding-top: 40px;" class="contact--us-area wow fadeInUp bg-white">
        <div class="container">
            <div class="row">

                <!-- Contact Form -->
                <div class="col-12">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div style="padding-bottom: 20px;" class="contact-heading">
                            <h2 style="text-align: center;">Leave your feedback for this driver</h2>
                        </div>
                        <div class="contact_form">
                            <form method="post">
                                <?php
                                    $sql = "SELECT username, firstname, lastname FROM users WHERE username = '" . $_SESSION['username'] . "'";

                                    $result = mysqli_query($db, $sql);
                                    $row2 = mysqli_fetch_array($result); 
                                ?>
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                                <input type="hidden" class="form-control mb-30" name="personid" value="<?php echo $row['id']; ?>">

                                                <input type="hidden" class="form-control mb-30" name="firstname" id="name" placeholder="First Name" value="<?php echo $row2['firstname']; ?>">
                                            
                                        <!-- Form Group -->
                                        
                                                <input type="hidden" class="form-control mb-30" name="lastname" id="name-2" placeholder="Last Name" value="<?php echo $row2['lastname']; ?>">
                                            
                                        <!-- Form Group -->
                                        
                                            
                                                <input type="hidden" class="form-control mb-30" name="username" id="email" placeholder="username" value="<?php echo $row2['username']; ?>">
                                            
                                        <!-- Form Group -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <p>Your Rating:</p>
                                        <select name="rate" class="form-control mb-30">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <p>Your Feedback:</p>
                                                <textarea name="feedback" class="form-control mb-30" cols="30" rows="6" placeholder="" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" name="rateandfeedback" class="btn confer-btn">Submit <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->


        

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
