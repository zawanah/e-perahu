<?php
	$username = "";
	$email = "";
	$fname = "";
	$lname = "";
	$phone_no = "";
	$reg_no= "";
	$availabilitydriver= "";


	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');

//add new driver
	if (isset($_POST['registerdriver'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
    	$fname = mysqli_real_escape_string($db, $_POST['fname']);
    	$lname = mysqli_real_escape_string($db, $_POST['lname']);
    	$email = mysqli_real_escape_string($db, $_POST['email']);
    	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    	$phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
    	$reg_no= mysqli_real_escape_string($db, $_POST['reg_no']);
    	$availabilitydriver= mysqli_real_escape_string($db, $_POST['availabilitydriver']);


		if (empty($fname)) {
			array_push($errors, "- First name is required");
		}
		if (empty($lname)) {
			array_push($errors, "- Last name is required");
		}
		if (empty($username)) {
			array_push($errors, "- Username is required");
		}
		if (strlen($username) > 8){
   			array_push($errors, "- Username must be less than 8 characters");
   		}
		if (empty($email)) {
			array_push($errors, "- Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "- Password is required");
		}
		if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password_1"]) === 0) {
			array_push($errors, "- Password must be at least 8 characters and must contain at least 1 lower case letter, 1 upper case letter and 1 number");
		}

		if ($password_1 != $password_2) {
			array_push($errors, "- The two passwords do not match");
		}

		// Check if username already exists
		$userquery = "SELECT * FROM driver WHERE username='$username'";
		$result = mysqli_query($db, $userquery);

		if (mysqli_num_rows($result) == 1) {
			array_push($errors, "- The username has already been taken");
		}

		// Check if email already exists
    	$emailsql = "SELECT * FROM driver WHERE email='$email'";
    	$emailresult = mysqli_query($db, $emailsql);
    	if (mysqli_num_rows($emailresult) == 1) {
    		array_push($errors, "- The email is already exists");
    	}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password
			$sql = mysqli_query($db, "INSERT INTO driver (fname, lname, username, email, password, phone_no, reg_no, availability) VALUES ('$fname', '$lname', '$username', '$email', '$password', '$phone_no', '$reg_no', '$availabilitydriver')");
			// array_push($success, "Your account has created successfully!");
			header('location: Admin_List_Of_Driver.php');
		}
	}

	// edit button
	if (isset($_GET['edit'])) {
    	$id = $_GET['edit'];
    	$update = true;
    	$record = mysqli_query($db, "SELECT * FROM driver WHERE id='$id'");

    	$_SESSION['id'] = $id;

    }

	//update profile Driver
	if (isset($_POST['update'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone_no = $_POST['phone_no'];
		$reg_no = $_POST['reg_no'];

		mysqli_query($db, "UPDATE driver SET fname='$fname', lname='$lname', email='$email', phone_no='$phone_no', reg_no='$reg_no' WHERE id='$id'");
		session_destroy();
		unset($_SESSION['id']);
		header('location: Admin_List_Of_Driver.php');
	}

	//delete Driver
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM driver WHERE id='$id'");
		header('location: Admin_List_Of_Driver.php');
	}

	// show profile button
	if (isset($_GET['show'])) {
	    $id = $_GET['show'];
	    $update = true;
	    $record = mysqli_query($db, "SELECT * FROM driver WHERE id='$id'");

	    $_SESSION['id'] = $id;

	    }

	//status button
	if (isset($_POST['availability'])) {
		$availability = $_POST['availability'];

		mysqli_query($db, "UPDATE driver SET availability='$availability' WHERE username=" . $_SESSION['username'] . "'");
		header('location: ../../Driver_Dashboard/Driver_dashboard.php');
	}

	// rate and feedback
    // 	$firstname = "";
    //     $lastname = "";
    //     $username = "";
    //     $rate = "";
    //     $feedback = "";

    //     $errors = array();

    //     $db = mysqli_connect('localhost', 'root', '', 'registration');

    //     if (isset($_POST['submit'])) {
    //     $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    //     $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    //     $username = mysqli_real_escape_string($db, $_POST['username']);
    //     $rate = mysqli_real_escape_string($db, $_POST['rate']);
    //     $feedback = mysqli_real_escape_string($db, $_POST['feedback']);

    //     if (count($errors) == 0) {
    //         $sql = "INSERT INTO orders (firstname, lastname, username, rate, feedback) VALUES ('$firstname', '$lastname', '$username', '$rate', '$feedback') WHERE id = '" . $_SESSION['id'] . "'";
    //         mysqli_query($db, $sql);

    //         $_SESSION['success'] = "You are now logged in";
    //         header('Refresh:0'); // redirect to home page
    //     }
    // }


	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: ../Admin_Login/Admin_Login.php');


	}

?>
