<?php include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form method="post" action="signup.php">

					<span style="padding-bottom: 20px;" class="login100-form-title">
						Sign up
					</span>

					<!-- display validation errors here -->
					<?php include('errors.php'); ?>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="firstname" name="firstname" class="input100" placeholder="First Name" pattern="[A-Za-z]{1,15}" value="<?php echo $firstname; ?>" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="lastname" name="lastname" class="input100" placeholder="Last Name" pattern="[A-Za-z]{1,15}" value="<?php echo $lastname; ?>" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="username" name="username" class="input100" placeholder="Username" value="<?php echo $username; ?>" autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"  autocomplete="off">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input placeholder="Date of Birth" class="input100" name="dob" type="text" onfocus="(this.type='date')"  id="date" value="<?php echo $dob; ?>"  autocomplete="off">
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
