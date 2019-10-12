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
    <title>E-Perahu Edit Profile</title>

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


                            <!-- Logout Button -->
                            <a href="editprofile.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Edit Profile Area Start -->
    <div style="padding-top: 150px;" class="container bootstrap snippet">
      &ensp;
            <h3>Profile info</h3>
      &ensp;

            <?php include('successeditprofile.php'); ?>

            <form method="POST" class="form-horizontal">

                <?php
                                    $sql = "SELECT firstname, lastname, username, email, description FROM users WHERE username = '" . $_SESSION['username'] . "'";

                                    $result = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_array($result); 
                ?>

                <input type="hidden" name="id" value="<?php echo $username; ?>">


              <div class="form-group">
                <label class="col-lg-3 control-label">First Name:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Last Name:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Description:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>">
                </div>
              </div>
              
              
              &ensp;
              <!--button-->
              <div class="col-12">
                  <button type="submit" class="btn confer-btn" name="update">Update Profile</button>
                  <input type="button" class="confer-btn" value="Cancel" onclick="history.back();" />
              </div>
                <!--End button-->
                &ensp;
                </div>
              
            </form>
          
      
    

    <!-- Our Blog Area End -->

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
