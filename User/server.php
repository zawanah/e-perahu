<?php

// USER SECTION
// Sign up
	session_start();
	$id = "";
	$username = "";
	$firstname = "";
	$lastname = "";
	$email = "";
	$rate = "";
	$feedback = "";
	$personid = "";
	$description = "";
	$name = "";
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
	$types = "";
	$fname = "";
	$lname = "";
	$phone_no = "";
	$reg_no= "";
	$availability= "";

	$errors = array();
	$success = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');


	if (isset($_POST['register'])) {
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// ensure that form fields are filled properly
		if (empty($firstname)) {
			array_push($errors, "- First name is required");
		}
		if (empty($lastname)) {
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
		$userquery = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($db, $userquery);

		if (mysqli_num_rows($result) == 1) {
			array_push($errors, "- The username has already been taken");
		}

		// Check if email already exists
    	$emailsql = "SELECT * FROM users WHERE email='$email'";
    	$emailresult = mysqli_query($db, $emailsql);
    	if (mysqli_num_rows($emailresult) == 1) {
    		array_push($errors, "- The email is already exists");
    	}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password
			$sql = mysqli_query($db, "INSERT INTO users (firstname, lastname, username, email, password, description) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$description')");
			array_push($success, "Your account has created successfully!");
		}
	}

	// log user in from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "- Username is required");
		}
		if (empty($password)) {
			array_push($errors, "- Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password); // encrypt password
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

		//remember username checkbox
 		if (isset($_REQUEST['remember']))
   		$escapedRemember = mysqli_real_escape_string($db,$_REQUEST['remember']);

 		$cookie_time = 60 * 60 * 24 * 30; // 30 days
 	 	$cookie_time_Onset=$cookie_time+ time();
  		if (isset($escapedRemember)) {
    	/*
     	* Set Cookie from here for one hour
     	* */
    	setcookie("username", $username, $cookie_time_Onset);

  		} else {

     	$cookie_time_fromOffset=time() -$cookie_time;
		setcookie("username", '',$cookie_time_fromOffset );

  		}
  		//save this user and pass as cookie if remember checked end

  		$sql2 = "SELECT firstname, lastname, email, description FROM users WHERE username = '" . $_SESSION['username'] . "'";

  		$result = mysqli_query($db, $sql2);
  		$row = mysqli_fetch_array($result);



		// log user in
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";



		header('location: indexuser.php'); // redirect to home page
		}else{
		array_push($errors, "Wrong username/password combination");
		}
		}
		}

  		// editprofile
  		if (isset($_POST['update'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $description = $_POST['description'];

            mysqli_query($db, "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', description='$description' WHERE username='" . $_SESSION['username'] . "'");
            array_push($success, "Please Re log in to apply settings.  You will be redirected to login page in any seconds.");
            header( "refresh:6; url=login.php" );
            }

        // show profile button
		if (isset($_GET['show'])) {
	    $id = $_GET['show'];
	    $update = true;
	    $record = mysqli_query($db, "SELECT * FROM driver WHERE id='$id'");

	    $_SESSION['id'] = $id;

	    }

        // rate and feedback
        if (isset($_POST['rateandfeedback'])) {
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $rate = mysqli_real_escape_string($db, $_POST['rate']);
        $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
        $PersonID = mysqli_real_escape_string($db, $_POST['PersonID']);

        	if (empty($username)) {
			array_push($errors, "Phone Number is required");
		}
        	if (count($errors) == 0) {
            $sql3 = "INSERT INTO orders (firstname, lastname, username, rate, feedback, PersonID) VALUES ('$firstname', '$lastname', '$username', '$rate', '$feedback', '$PersonID') " ;
            mysqli_query($db, $sql3);

            $_SESSION['success'] = "Sent";
            header('Refresh:0'); // refresh page
        	}
    	}

    	// show promotion button
	if (isset($_GET['showpromo'])) {
	    $id = $_GET['showpromo'];
	    $update = true;
	    $record = mysqli_query($db, "SELECT * FROM promotion WHERE promoid ='$id'");

	    $_SESSION['id'] = $id;

	    }

		// logout
		if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');


		}


		// reservation
		$db2 = mysqli_connect('localhost', 'root', '', 'reservation');
			if (isset($_POST['paynow'])) {
				$firstname = mysqli_real_escape_string($db2, $_POST['firstname']);
				$lastname = mysqli_real_escape_string($db2, $_POST['lastname']);
				$username = mysqli_real_escape_string($db2, $_POST['username']);
				$email = mysqli_real_escape_string($db2, $_POST['email']);
				$phone = mysqli_real_escape_string($db2, $_POST['phone']);
				$selectedticket = mysqli_real_escape_string($db2, $_POST['selectedticket']);
				$pickup = mysqli_real_escape_string($db2, $_POST['pickup']);
				$destination = mysqli_real_escape_string($db2, $_POST['destination']);
				$pickupdate = mysqli_real_escape_string($db2, $_POST['pickupdate']);
				$operationtime = mysqli_real_escape_string($db2, $_POST['operationtime']);
				$ownername = mysqli_real_escape_string($db2, $_POST['ownername']);
				$debitnumber = mysqli_real_escape_string($db2, $_POST['debitnumber']);
				$debitcvv = mysqli_real_escape_string($db2, $_POST['debitcvv']);
				$expmonth = mysqli_real_escape_string($db2, $_POST['expmonth']);
				$expyear = mysqli_real_escape_string($db2, $_POST['expyear']);
				$types = mysqli_real_escape_string($db2, $_POST['types']);

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
			$sql4 = "INSERT INTO reservationtable (firstname, lastname, username, email, phone, selectedticket, pickup, destination, pickupdate, operationtime, ownername, debitnumber, debitcvv, expmonth, expyear, types)
			VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$selectedticket', '$pickup', '$destination', '$pickupdate', '$operationtime', '$ownername', '$debitnumber', '$debitcvv', '$expmonth', '$expyear', '$types')";
			mysqli_query($db2, $sql4);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../Reservation_Successful.php'); // redirect to home page
		}
	}

		if (isset($_POST['paynow'])) {
				$firstname = mysqli_real_escape_string($db2, $_POST['firstname']);
				$lastname = mysqli_real_escape_string($db2, $_POST['lastname']);
				$username = mysqli_real_escape_string($db2, $_POST['username']);
				$email = mysqli_real_escape_string($db2, $_POST['email']);
				$phone = mysqli_real_escape_string($db2, $_POST['phone']);
				$selectedticket = mysqli_real_escape_string($db2, $_POST['selectedticket']);
				$pickup = mysqli_real_escape_string($db2, $_POST['pickup']);
				$destination = mysqli_real_escape_string($db2, $_POST['destination']);
				$pickupdate = mysqli_real_escape_string($db2, $_POST['pickupdate']);
				$operationtime = mysqli_real_escape_string($db2, $_POST['operationtime']);
				$ownername = mysqli_real_escape_string($db2, $_POST['ownername']);
				$debitnumber = mysqli_real_escape_string($db2, $_POST['debitnumber']);
				$debitcvv = mysqli_real_escape_string($db2, $_POST['debitcvv']);
				$expmonth = mysqli_real_escape_string($db2, $_POST['expmonth']);
				$expyear = mysqli_real_escape_string($db2, $_POST['expyear']);

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
			$sql4 = "INSERT INTO reservationdriver (firstname, lastname, username, email, phone, selectedticket, pickup, destination, pickupdate, operationtime)
			VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$selectedticket', '$pickup', '$destination', '$pickupdate', '$operationtime')";
			mysqli_query($db2, $sql4);
			$_SESSION['success'] = "Payment Successful";
			header('location: ../Reservation_Successful.php'); // redirect to home page
		}
	}

	// Contact Us
	if (isset($_POST['contactus'])) {
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$message = mysqli_real_escape_string($db, $_POST['message']);
		$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$sql = mysqli_query($db, "INSERT INTO contact (firstname, lastname, email, phonenumber, message) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$message')");
			array_push($success, "Your message has been sent successfully!");
		}
	}

// DRIVER SECTION
//status button
	if (isset($_POST['availability'])) {
		$availability = $_POST['availability'];

		mysqli_query($db, "UPDATE driver SET availability='$availability' WHERE username='" . $_SESSION['username'] . "'"); 
		header('location: Driver_dashboard.php');
	}

	// feedback button
	if (isset($_GET['getfeedback'])) {
	    $id = $_GET['getfeedback'];
	    $update = true;
	    $record = mysqli_query($db, "SELECT * FROM driver WHERE id='$id'");

	    $_SESSION['id'] = $id;

	    }

	// pick customer button
        if (isset($_GET['pick'])) {
          	$id = $_GET['pick'];
            $update = true;
            $record = mysqli_query($db2, "SELECT * FROM reservationdriver WHERE id='$id'");

                $_SESSION['id'] = $id;

                }

	//confirm pick
		if (isset($_GET['del'])) {
			$id = $_GET['del'];
			mysqli_query($db2, "DELETE FROM reservationdriver WHERE id= '$_SESSION[id] '");
			header('location: ../Driver_ListOfCustomer/Driver_ListOfCustomer.php');
		}

	// logout
	if (isset($_GET['logoutdriver'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: ../Driver_Login/Driver_Login.php');


	}


    
?>
