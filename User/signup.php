<?php include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Perahu - User Signup</title>

	<!-- Favicon -->
    <link rel="icon" href="img/e-perahu.png">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/e-perahu.png" alt=""></a>

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
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">Information</a>
                                    <ul class="dropdown">
                                        <li><a href="nlticketprice.php">- Ticket Price</a></li>
                                        <li><a href="nlpromo.php">- promotion</a></li>
									</ul>
                                </li>
                                <li><a href="aboutus.php">About Us</a></li>
                            </ul>
							<!-- Login Button -->
                            <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Header Area End -->
	<div class="limiter">
		<div class="container-login100" style="padding-top: 130px;">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form method="post" action="signup.php">

					<span style="padding-bottom: 20px;" class="login100-form-title">
						Sign up
					</span>

					<!-- display validation errors here -->
					<?php include('errors.php'); ?>
					<?php include('success.php'); ?>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="firstname" name="firstname" class="input100" placeholder="First Name" pattern="[A-Za-z]{1,15}" value="" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="lastname" name="lastname" class="input100" placeholder="Last Name" pattern="[A-Za-z]{1,15}" value="" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="username" name="username" class="input100" placeholder="Username" value="" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="email" name="email" placeholder="Email" value=""  autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password_1" placeholder="Password">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password_2" placeholder="Confirm password">
						<span class="focus-input100"></span>
						<input type="hidden" name="description" value="Nothing to see here">
					</div>


					<div class="container-login100-form-btn p-t-25">
						<button type="submit" name="register" class="login100-form-btn">Sign up
						</button>
					</div>

					<div style="text-align:center; padding-top: 15px;">
						<span class="txt1">
							Already a member?
						</span>

						<a class="txt1 bo1 hov1" href="login.php">
							Log in now
						</a>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<a href="index.php">
							Back to homepage
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>

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
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>
