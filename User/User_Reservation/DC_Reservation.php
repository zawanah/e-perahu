<?php include('../server.php');

	if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Debit Card Reservation</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="build/css/bootstrap.min.css" />

	<!-- Custom stlylesheet for Reservation form -->
	<link type="text/css" rel="stylesheet" href="build/css/style.css" />

	<!-- For phone number validation -->
	<link rel="stylesheet" href="build/css/intlTelInput.css">
	<script src="build/js/intlTelInput.js"></script>

	<!-- For pickup and destination -->
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

<!-- For ticket calculation -->
<script type="text/javascript" src="build/js/ticketformcalculations.js"></script>


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

						<form method="post" action="DC_Reservation.php" id="ticketform">

							<?php $sql = "SELECT firstname, lastname, email FROM users WHERE username = '" . $_SESSION['username'] . "'";

  										$result = mysqli_query($db, $sql);
  										$row = mysqli_fetch_array($result);
  							?>

							<!-- display validation errors here -->
							<?php include('../errors.php'); ?>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="hidden" name="firstname" value="<?php echo $row['firstname']; ?>">
										<input type="hidden" name="lastname" value="<?php echo $row['lastname']; ?>">
										<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
										<input type="hidden" name="type" value="Debit Card">
										<span class="form-label">Phone</span>
										<!-- maxlength="7" pattern="[0-9]{7}" -->
										<input id="phone" class="form-control" type="text" name="phone" placeholder="Number" required>
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
										<span class="form-label">Package Selected</span>
										<select class="form-control" placeholder="packageselected" name='selectedticket' onclick="calculateTotal()" required>
											<option value="price0">Choose your ticket</option>
											<option value="price1">One-Way Trip (BND$1)</option>
											<option value="price2">Two-Way Trip (BND$2)</option>
											<option value="price7">Kampong Ayer Tour (BND$7)</option>
											<option value="price14">Pulau Chermin Tour (BND$14)</option>
											<option value="price11">Istana Nurul Iman Tour (BND$11)</option>
											<option value="price32">Full Tour (BND$32)</option>
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
									<input class="datepicker form-control" type="text" name="pickupdate" placeholder="MM/DD/YYYY" autocomplete="off" required>
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

					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Total Cost</span>
								<div class="form-control" id="totalPrice"></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Number of Ticket</span>
								<select class="form-control" placeholder="numberofticket" name='quantity' onchange="calculateTotal()" required>
									<option value="zero">No. of person</option>
									<option value="one">1 Person</option>
									<option value="two">2 Person</option>
									<option value="three">3 Person</option>
									<option value="four">4 Person</option>
									<option value="five">5 Person</option>
									<option value="six">6 Person</option>
									<option value="seven">7 Person</option>
									<option value="eight">8 Person</option>
									<option value="nine">9 Person</option>
									<option value="ten">10 Person</option>
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

<!-- For card validation -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="build/js/jquery.payform.min.js" charset="utf-8"></script>
<script src="build/js/cardscript.js"></script>

</body>

</html>
