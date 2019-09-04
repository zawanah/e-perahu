<?php
	session_start();
	$fname = "";
  $lname = "";
	$email = "";
	$phone_no = "";
  $reg_no="";

	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['register'])) {

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
		// if (empty($debitcvv)) {
		// 	array_push($errors, "CVV is required");
		// }
		if (empty($reg_no)) {
			array_push($errors, "Boat Registered no. is required");
		}
		// if (empty($expyear)) {
		// 	array_push($errors, "Expiry Year is required");
		// }

		if (count($errors) == 0) {
			$sql = "INSERT INTO driver (fname, lname, email, phone_no, reg_no )
			VALUES ('$fname','$lname', '$email', '$phone','$reg_no' )";
			mysqli_query($db, $sql);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../Admin_List_Of_Driver/Admin_List_Of_Driver.php'); // redirect to home page
		}
	}

?>
