<?php
	session_start();
	$username = "";
	$password = "";
	$email = "";
	$fname = "";
	$lname = "";
	$phone_no = "";
	$reg_no="";

	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');

//add new driver

	if (isset($_POST['register2'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
    $reg_no= mysqli_real_escape_string($db, $_POST['reg_no']);


		if (empty($phone_no)) {
			array_push($errors, "Phone Number is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}

		if (empty($reg_no)) {
			array_push($errors, "Boat Registered no. is required");
		}



		if (count($errors) == 0) {
			$sql2 = "INSERT INTO driver (username, password, fname, lname, email, phone_no, reg_no )
			VALUES ('$username', '$password','$fname','$lname', '$email', '$phone_no','$reg_no' )";
			mysqli_query($db, $sql2);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../Admin_List_Of_Driver/Admin_List_Of_Driver.php'); // redirect to home page
		}
	}



	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');


	}

?>
