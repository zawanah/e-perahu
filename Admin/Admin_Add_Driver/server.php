<?php
	session_start();
	$id = "";
	$username = "";
	$password = "";
	$email = "";
	$fname = "";
	$lname = "";
	$phone_no = "";
	$reg_no= "";


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

	// edit button

	if (isset($_GET['edit'])) {
                            $id = $_GET['edit'];
                            $update = true;
                            $record = mysqli_query($db, "SELECT * FROM driver WHERE id='$id'");

                            // if (count($record) == 1 ) {
                            //   $n = mysqli_fetch_array($record);
                            //   $fname = $n['fname'];
                            //   $lname = $n['lname'];
                            //   $email = $n['email'];
                            //   $phone_no = $n['phone_no'];
                            //   $reg_no = $n['reg_no'];

                              $_SESSION['id'] = $id;
                            // }
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




	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');


	}

?>
