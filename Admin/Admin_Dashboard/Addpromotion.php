<?php
	session_start();
	$promoid = "";
	$promotitle = "";
	$promotext = "";
	$promoimage = "";
	$promolocation = "";
	$promostart = "";


	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');

//add new promotion
	if (isset($_POST['submit'])) {
		$promoid = mysqli_real_escape_string($db, $_POST['promoid']);
		$promotitle= mysqli_real_escape_string($db, $_POST['promotitle']);
    	$promotext = mysqli_real_escape_string($db, $_POST['promotext']);
    	$promoimage = mysqli_real_escape_string($db, $_POST['promoimage']);
    	$promolocation = mysqli_real_escape_string($db, $_POST['promolocation']);
    	$promostart = mysqli_real_escape_string($db, $_POST['promostart']);



		if (empty($promotitle)) {
			array_push($errors, "Title is required");
		}
		if (empty($promotext)) {
			array_push($errors, "Description is required");
		}

		if (empty($promolocation)) {
			array_push($errors, "location is required");
		}
    if (empty($promostart)) {
      array_push($errors, "Start date is required");
    }

		//display list of driver
		if (count($errors) == 0) {
			$sql2 = "INSERT INTO promotion (promotitle, promotext, promolocation, promoimage,promostart )
			VALUES ('$promotitle', '$promotext', '$promolocation', '$promoimage', '$promostart' )";
			mysqli_query($db, $sql2);
			$_SESSION['success'] = "Driver Successfully added!";
			header('location: promolist.php'); // redirect to home page
		}
	}

//upload image
if (isset($_POST['upload'])) {
	// Get image name
	$promoimage = $_FILES['promoimage']['promotitle'];
	// Get text
	$promotext = mysqli_real_escape_string($db, $_POST['promotext']);

	// image file directory
	$target = "images/".basename($promoimage);

	$sql = "INSERT INTO promotion (promoimage, promotext) VALUES ('$promoimage', '$promotext')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['promoimage']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "Failed to upload image";
	}
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
    <title>E-perahu -Add promotion</title>

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
                            <a href="Admin_Add_Driver.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <h2 class="page-title">Add Promotion</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->



                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                    &ensp;

                    	<form method="post">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Promotion Information</h4>
                        </div>
                          &ensp;

                        <div class="contact_form">
                            <!-- <form action="mail.php" method="post"> -->
                                <div class="contact_input_area">
                                    <div class="row">

                                      <!-- Form Group -->
                                      <div class="col-12 col-lg-6">
                                          <div class="form-group">
                                              <input type="text" class="form-control mb-30" name="promotitle" placeholder="Title" required>
                                          </div>
                                      </div>

                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="promotext" placeholder="Description" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="promolocation"  placeholder="Location" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="promostart"  placeholder="Start Date" required>
                                            </div>
                                        </div>

																				<br>

  																				<!-- <div class="card-body">
    																<p class="card-text " >Choose file : </p>
    														<a href="#" class="btn btn-secondary">Choose</a>
  													</div>
													</div> -->
													<div class="col-12 col-lg-6">
														<input type="file" name="promoimage">
													</div>
                                        <!-- Button -->
                                        <div class="col-12">
																					<br>
                                            <button type="submit" name="submit" class="btn confer-btn">Upload<i class="zmdi zmdi-long-arrow-right"></i></button>
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
