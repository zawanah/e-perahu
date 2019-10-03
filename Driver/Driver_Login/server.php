<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration' );

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
			$query = "SELECT * FROM driver WHERE username='$username' AND password='$password'";
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
		header('location: Driver_Login.php');


	}

?>