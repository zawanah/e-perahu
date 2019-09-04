<?php
	session_start();
	$name = "";
	$email = "";
	$phone = "";
	$pickup = "";
	$destination = "";
	$pickupdate = "";
	$hour = "";
	$min = "";
	$ampm = "";
	$debitnumber = "";
	$debitcvv = "";
	$expmonth = "";
	$expyear = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'reservation');

	if (isset($_POST['paynow'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$pickup = mysqli_real_escape_string($db, $_POST['pickup']);
		$destination = mysqli_real_escape_string($db, $_POST['destination']);
		$pickupdate = mysqli_real_escape_string($db, $_POST['pickupdate']);
		$hour = mysqli_real_escape_string($db, $_POST['hour']);
		$min = mysqli_real_escape_string($db, $_POST['min']);
		$ampm = mysqli_real_escape_string($db, $_POST['ampm']);
		$debitnumber = mysqli_real_escape_string($db, $_POST['debitnumber']);
		$debitcvv = mysqli_real_escape_string($db, $_POST['debitcvv']);
		$expmonth = mysqli_real_escape_string($db, $_POST['expmonth']);
		$expyear = mysqli_real_escape_string($db, $_POST['expyear']);

		// ensure that form fields are filled properly
		if (empty($phone)) {
			array_push($errors, "Phone Number is required");
		}
		if (empty($debitnumber)) {
			array_push($errors, "Debit Number is required");
		}
		if (empty($debitcvv)) {
			array_push($errors, "CVV is required");
		}
		if (empty($expmonth)) {
			array_push($errors, "Expiry Month is required");
		}
		if (empty($expyear)) {
			array_push($errors, "Expiry Year is required");
		}
		// if ($password_1 != $password_2) {
		// 	array_push($errors, "The two passwords do not match");
		// }

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			// $password = md5($password_1); // encrypt password
			$sql = "INSERT INTO reservationtable (name, email, phone, pickup, destination, pickupdate, hour, min, ampm, debitnumber, debitcvv, expmonth, expyear)
			VALUES ('$name', '$email', '$phone', '$pickup', '$destination', '$pickupdate', '$hour', '$min', '$ampm', '$debitnumber', '$debitcvv', '$expmonth', '$expyear')";
			mysqli_query($db, $sql);
			// $_SESSION['username'] = $username;
			$_SESSION['success'] = "Payment Successful";
			header('location: ../indexuser.php'); // redirect to home page
		}
	}

	// log user in from login page
	// if (isset($_POST['login'])) {
	// 	$username = mysqli_real_escape_string($db, $_POST['username']);
	// 	$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure that form fields are filled properly
		// if (empty($username)) {
		// 	array_push($errors, "Username is required");
		// }
		// if (empty($password)) {
		// 	array_push($errors, "Password is required");
		// }

	// 	if (count($errors) == 0) {
	// 		$password = md5($password); // encrypt password
	// 		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	// 		$result = mysqli_query($db, $query);
	// 		if (mysqli_num_rows($result) == 1) {
	// 			// log user in
	// 			$_SESSION['username'] = $username;
	// 			$_SESSION['success'] = "You are now logged in";
	// 			header('location: indexuser.php'); // redirect to home page
	// 		}else{
	// 			array_push($errors, "Wrong username/password combination");
	// 		}
	// 	}
	// }

	// logout
	// if (isset($_GET['logout'])) {
	// 	session_destroy();
	// 	unset($_SESSION['username']);
	// 	header('location: index.php');
	//
	//
	// }

?>
