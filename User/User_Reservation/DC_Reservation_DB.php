<?php

	session_start();
	$firstname = "";
	$lastname = "";
	$username = "";
	$email = "";
	$phone = "";
	$selectedticket = "";
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
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$selectedticket = mysqli_real_escape_string($db, $_POST['selectedticket']);
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
		if (empty($expmonth)) {
			array_push($errors, "Expiry Month is required");
		}
		if (empty($expyear)) {
			array_push($errors, "Expiry Year is required");
		}

		if (count($errors) == 0) {
			$sql = "INSERT INTO reservationtable (firstname, lastname, username, email, phone, selectedticket, pickup, destination, pickupdate, operationtime, ownername, debitnumber, debitcvv, expmonth, expyear)
			VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$selectedticket', '$pickup', '$destination', '$pickupdate', '$operationtime', '$ownername', '$debitnumber', '$debitcvv', '$expmonth', '$expyear')";
			mysqli_query($db, $sql);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../Reservation_Successful.php'); // redirect to home page
		}
	}

?>
