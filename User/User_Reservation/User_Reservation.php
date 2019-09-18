<?php include('reservationdb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="build/css/bootstrap.min.css" />

	<!-- Custom stlylesheet for Reservation form -->
	<link type="text/css" rel="stylesheet" href="build/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- for phone number validation -->
	<link rel="stylesheet" href="build/css/intlTelInput.css">
	<script src="build/js/intlTelInput.js"></script>


	<!-- for pickup and destination -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	  $('select').change(function() {

	    $('#select1, #select2').not(this)
	        .children('option[value=' + this.value + ']')
	        .attr('disabled', true)
	        .siblings().removeAttr('disabled');

	});
	});
	</script>

<!-- For datepicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="build/js/datepicker.js"></script>

<!-- For card validation -->
<link rel="stylesheet" type="text/css" href="build/css/cardstyle.css">

</head>

<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Reservation</h1>
						</div>
						<form method="post" action="User_Reservation.php">

							<!-- display validation errors here -->
							<?php include('errors.php'); ?>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Phone</span>
										<input id="phone" class="form-control" type="text" name="phone" placeholder="Number" maxlength="7" pattern="[0-9]{7}" required>
										<script>
										var input = document.querySelector("#phone");
										window.intlTelInput(input, {
											utilsScript: "build/js/utils.js",
										});
									</script>
								</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Driver</span>
										<select class="form-control" placeholder="driver" required>
												<option> </option>
									      <option value="1">Driver 1</option>
									      <option value="2">Driver 2</option>
									      <option value="3">Driver 3</option>
												<option value="4">Driver 4</option>
									  </select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Pickup</span>
									<select class="form-control" id="select1" name="pickup" placeholder="from" required>
										<option> </option>
								      <option value="1">Jetty 1</option>
								      <option value="2">Jetty 2</option>
								      <option value="3">Jetty 3</option>
											<option value="4">Jetty 4</option>
								  </select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Destination</span>
									<select class="form-control" id="select2" name="destination" placeholder="to" required>
											<option> </option>
								      <option value="1">Jetty 1</option>
								      <option value="2">Jetty 2</option>
								      <option value="3">Jetty 3</option>
											<option value="4">Jetty 4</option>
								  </select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Pickup Date</span>
									<input id="datepicker" class="form-control" type="text" name="pickupdate" placeholder="MM/DD/YYYY" autocomplete="off" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Operation Time (6AM - 9PM)</span>
									<input class="form-control" type="time" name="operationtime" min="06:00" max="21:00" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group owner">
									<span class="form-label">Owner Name</span>
									<input type="text" class="form-control" id="owner" name="ownername" autocomplete="off" required>
								</div>
							</div>
							<br>
							<div class="col-sm-6">
								<div class="form-group" id="credit_cards">
									<img src="build/img/visa.jpg" id="visa">
									<img src="build/img/mastercard.jpg" id="mastercard">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group" id="card-number-field">
									<span class="form-label">Card Number</span>
									<input type="text" class="form-control" id="cardNumber" name="debitnumber" autocomplete="off">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group CVV">
									<span class="form-label">Card CVV<br></span>
									<input type="text" class="form-control" id="cvv" name="debitcvv" maxlength="3" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Expiration Date</span>
									<select class="form-control" name="expmonth" autocomplete="off">
										<option value="01">January</option>
										<option value="02">February </option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label"><br></span>
									<select class="form-control" name="expyear" autocomplete="off">
										<option value="19"> 2019</option>
										<option value="20"> 2020</option>
										<option value="21"> 2021</option>
										<option value="22"> 2022</option>
										<option value="23"> 2023</option>
										<option value="24"> 2024</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>

						<div class="form-btn" id="pay-now">
							<button type="submit" name="paynow" class="submit-btn" id="confirm-purchase" onclick="">Pay Now</button>
						</div>

						<div class="container-login100-form-btn p-t-25">
							<a href="../indexuser.php">
								Back to homepage
							</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="build/js/jquery.payform.min.js" charset="utf-8"></script>
<script src="build/js/script.js"></script>

</body>

</html>
