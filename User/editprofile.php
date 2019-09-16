<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>e-perahu Admin Edit Driver</title>

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

    <?php
        if (isset($_POST['submit'])) {

            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $bio = $_POST['bio'];

            $target= 'img/' . $_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $target);
            
            $query = dbConnection()->prepare('INSERT INTO profile VALUES(:profile_id, :fullname, :age, :bio, :img);');

            $query->bindParam(":profile_id", $profile_id);
            $query->bindParam(":fullname", $fullname);
            $query->bindParam(":age", $age);
            $query->bindParam(":bio", $bio);
            $query->bindParam(":img", $target);
        
            $query->execute();
        }
   ?>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

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


                            <!-- Get Tickets Button -->
                            <a href="#" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Edit Driver Info</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Blog Area Start -->
    <div class="container bootstrap snippet">
      &ensp;
            <h3>Personal info</h3>
      &ensp;

            <form method="POST" class="form-horizontal">
              <div class="form-group">
                <label class="col-lg-3 control-label">Full Name:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="fullname">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Age:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="age">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Tell something about yourself:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="bio">
                </div>
              </div>
              
              &ensp;
              <!--button-->
              <div class="col-12">
                  <button type="submit" class="btn confer-btn" name="submit">Update Profile<i class="zmdi zmdi-long-arrow-right"></i></button>
              </div>
                <!--End button-->
                &ensp;
                </div>
              </div>
            </form>
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
                    </div>

                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                            </ul>
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
