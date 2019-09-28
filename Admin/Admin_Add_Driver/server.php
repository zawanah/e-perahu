<?php
	session_start();
	$id = "";
	$username = "";
	$password = "";
	$email = "";
	$fname = "";
	$lname = "";
	$phone_no = "";
	$reg_no="";
	$update=true;


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


//display list of driver
		if (count($errors) == 0) {
			$password = md5($password);
			$sql2 = "INSERT INTO driver (username, password, fname, lname, email, phone_no, reg_no )
			VALUES ('$username', '$password','$fname','$lname', '$email', '$phone_no','$reg_no' )";
			mysqli_query($db, $sql2);
			$_SESSION['success'] = "Driver Successfully added!";
			header('location: ../Admin_Add_Driver/Admin_List_Of_Driver.php'); // redirect to home page
		}
	}

//list of users
if (count($errors) == 0) {
	$password = md5($password);
	$sql2 = "INSERT INTO user (firstname, lastname, username, email )
	VALUES ('$firstname', '$lastname','$username', '$email')";
	mysqli_query($db, $sql2);
	$_SESSION['success'] = "user Successfully added!";
	header('location: ../Admin_Add_Driver/Admin_list_of_users.php'); // redirect to home page
}
}



//update profile Driver

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname= $_POST['lname'];

	mysqli_query($db, "UPDATE driver SET fname='$fname', lname='$lname' WHERE id=$id");
	$_SESSION['message'] = "driver updated!";
	header('location:../Admin_Add_Driver/Admin_List_Of_Driver.php ');
}

//delete Driver
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM driver WHERE id=$id");
	$_SESSION['message'] = "driver deleted!";
	header('location: ../Admin_Add_Driver/Admin_List_Of_Driver.php');
}




	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');


	}

?>
