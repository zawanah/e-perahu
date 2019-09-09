<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration' );

	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// ensure that form fields are filled properly
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
		$userquery = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($db, $userquery);

		if (mysqli_num_rows($result) == 1) {
			array_push($errors, "- The username has already been taken");
		}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password
			$sql = "INSERT INTO drivers (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../Driver_Login/Driver_Login.php'); // redirect to home page
		}
	}

	// log user in from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password); // encrypt password
			$query = "SELECT * FROM drivers WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

				//save this user and pass as cookie if remeber checked start
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

				// log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../Driver_Dashboard/Driver_dashboard.php'); // redirect to home page
			}else{
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: ../Driver_Login/Driver_Login.php');


	}

?>