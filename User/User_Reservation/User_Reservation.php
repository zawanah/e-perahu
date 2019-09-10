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

		<!-- For datepicker -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">

		<script src="build/js/jquery-1.12.4.js"></script>
		<script src="build/js/jquery-ui.js"></script>
		<script>
		$( function() {
			$( "#datepicker" ).datepicker({ minDate: 0 });
		} );
		</script>

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
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label" >Name</span>
											<input class="form-control" type="text" name="name" placeholder="Enter your name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input class="form-control" type="email" name="email" placeholder="Enter your email">
										</div>
									</div>
								</div>
								<div class="form-group">
									<span class="form-label">Phone</span>
									<input id="phone" class="form-control" type="tel" name="phone" placeholder="Number">
									<script src="build/js/intlTelInput.js"></script>
									<script>
									var input = document.querySelector("#phone");
									window.intlTelInput(input, {
										// allowDropdown: false,
										// autoHideDialCode: false,
										// autoPlaceholder: "off",
										// dropdownContainer: document.body,
										// excludeCountries: ["us"],
										// formatOnDisplay: false,
										// geoIpLookup: function(callback) {
										//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
										//     var countryCode = (resp && resp.country) ? resp.country : "";
										//     callback(countryCode);
										//   });
										// },
										// hiddenInput: "full_number",
										// initialCountry: "auto",
										// localizedCountries: { 'de': 'Deutschland' },
										// nationalMode: false,
										// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
										// placeholderNumberType: "MOBILE",
										// preferredCountries: ['cn', 'jp'],
										// separateDialCode: true,
										utilsScript: "build/js/utils.js",
									});
									</script>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Pickup</span>
											<select class="form-control" type="text" name="pickup" placeholder="Enter Location">
												<option>Jetty 1</option>
												<option>Jetty 2</option>
												<option>Jetty 3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Destination</span>
											<select class="form-control" type="text" name="destination" placeholder="Enter Location">
												<option>Jetty 1</option>
												<option>Jetty 2</option>
												<option>Jetty 3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Pickup Date</span>
											<input id="datepicker" class="form-control" type="text" name="pickupdate" placeholder="MM/DD/YYYY" autocomplete="off" required>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<span class="form-label">Hour</span>
													<select class="form-control" name="hour">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
														<option>9</option>
														<option>10</option>
														<option>11</option>
														<option>12</option>
													</select>
													<span class="select-arrow"></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<span class="form-label">Min</span>
													<select class="form-control" name="min">
														<option>05</option>
														<option>10</option>
														<option>15</option>
														<option>20</option>
														<option>25</option>
														<option>30</option>
														<option>35</option>
														<option>40</option>
														<option>45</option>
														<option>50</option>
														<option>55</option>
													</select>
													<span class="select-arrow"></span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<span class="form-label">AM/PM</span>
													<select class="form-control" name="ampm">
														<option>AM</option>
														<option>PM</option>
													</select>
													<span class="select-arrow"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Debit Card</span>
											<input id="cardNumber" class="form-control" type="text" name="debitnumber" autocomplete="off" placeholder="Card Number">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label"><br></span>
											<input id="cvv" class="form-control" type="text" name="debitcvv" autocomplete="off" placeholder="CVV">
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
												<option value="16"> 2016</option>
												<option value="17"> 2017</option>
												<option value="18"> 2018</option>
												<option value="19"> 2019</option>
												<option value="20"> 2020</option>
												<option value="21"> 2021</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" name="paynow" class="submit-btn">Pay Now</button>
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

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

	</html>
