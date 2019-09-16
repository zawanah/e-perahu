<?php
	session_start();
	$name = "";
	$email = "";
	$phone = "";
	$pickup = "";
	$destination = "";
	$pickupdate = "";
	$operationtime="";
	$ownername = "";
	$debitnumber = "";
	$debitcvv = "";
	$expmonth = "";
	$expyear = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'reservation');

	if (isset($_POST['paynow'])) {
		// $name = mysqli_real_escape_string($db, $_POST['name']);
		// $email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$pickup = mysqli_real_escape_string($db, $_POST['pickup']);
		$destination = mysqli_real_escape_string($db, $_POST['destination']);
		$pickupdate = mysqli_real_escape_string($db, $_POST['pickupdate']);
		$operationtime = mysqli_real_escape_string($db, $_POST['operationtime']);
		$ownername = mysqli_real_escape_string($db, $_POST['ownername']);
		$debitnumber = mysqli_real_escape_string($db, $_POST['debitnumber']);
		$debitcvv = mysqli_real_escape_string($db, $_POST['debitcvv']);
		$expmonth = mysqli_real_escape_string($db, $_POST['expmonth']);
		$expyear = mysqli_real_escape_string($db, $_POST['expyear']);

		if (empty($phone)) {
			array_push($errors, "Phone Number is required");
		}
		if (empty($debitnumber)) {
			array_push($errors, "Debit Number is required");
		}
		if (strlen($debitnumber) > 19){
   			array_push($errors, "- Wrong card number");
   		}
   		if (strlen($debitnumber) < 19){
   			array_push($errors, "- Wrong card number");
   		}
		if (empty($debitcvv)) {
			array_push($errors, "CVV is required");
		}
		if (strlen($debitcvv) < 3){
   			array_push($errors, "- Wrong CVV number");
   		}
   		if (strlen($debitcvv) > 4){
   			array_push($errors, "- Wrong CVV number");
   		}
		if (empty($expmonth)) {
			array_push($errors, "Expiry Month is required");
		}
		if (empty($expyear)) {
			array_push($errors, "Expiry Year is required");
		}

		if (count($errors) == 0) {
			$sql = "INSERT INTO reservationtable (name, email, phone, pickup, destination, pickupdate, operationtime, ownername, debitnumber, debitcvv, expmonth, expyear)
			VALUES ('$name', '$email', '$phone', '$pickup', '$destination', '$pickupdate', '$operationtime', '$ownername', '$debitnumber', '$debitcvv', '$expmonth', '$expyear')";
			mysqli_query($db, $sql);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../indexuser.php'); // redirect to home page
		}
	}

?>
