<?php include('DC_Reservation_DB.php');

	// if (empty($_SESSION['username'])) {
  //       header('location: login.php');
  //   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Debit Card Reservation 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="build/img/icon.png"/>

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

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


	<div class="container-contact100">
		<div class="wrap-contact100">

			<form method="post" action="DC_Reservation.php" id="ticketform" class="contact100-form validate-form">
				<!-- <?php $sql = "SELECT firstname, lastname, username, email FROM users WHERE username = '" . $_SESSION['username'] . "'";

								$result = mysqli_query($db, $sql);
								$row = mysqli_fetch_array($result);
					?> -->

				<!-- display validation errors here -->
				<?php include('../errors.php'); ?>

							<input type="hidden" name="firstname" value="<?php echo $row['firstname']; ?>">
							<input type="hidden" name="lastname" value="<?php echo $row['lastname']; ?>">
							<input type="hidden" name="username" value="<?php echo $row['username']; ?>">
							<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
							<input type="hidden" name="types" value="Debit Card">

				<span class="contact100-form-title">
					RESERVATION
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Phone</span>
					<!-- maxlength="7" pattern="[0-9]{7}" -->
					<input id="phone" class="input100" type="text" name="phone" placeholder="Number" required>
					<script>
					var input = document.querySelector("#phone");
					window.intlTelInput(input, {
						utilsScript: "build/js/utils.js",
					});
				</script>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Package Selected</span>
					<div>
						<select class="selection-2" placeholder="packageselected" name='selectedticket' onclick="calculateTotal()" required>
							<option value="None">Choose your ticket</option>
							<option value="One Way">One-Way Trip (BND$1)</option>
							<option value="Two Way">Two-Way Trip (BND$2)</option>
							<option value="Kampong Ayer">Kampong Ayer Tour (BND$7)</option>
							<option value="Pulau Chermin">Pulau Chermin Tour (BND$14)</option>
							<option value="Nurul Iman">Istana Nurul Iman Tour (BND$11)</option>
							<option value="Full">Full Tour (BND$32)</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Pickup</span>
					<div>
						<select class="selection-2" id="select1" name="pickup" placeholder="from" required>
								<option> </option>
								<option value="1">Jetty 1</option>
								<option value="2">Jetty 2</option>
								<option value="3">Jetty 3</option>
								<option value="4">Jetty 4</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Destination</span>
					<div>
						<select class="selection-2" id="select2" name="destination" placeholder="to" required>
								<option> </option>
								<option value="1">Jetty 1</option>
								<option value="2">Jetty 2</option>
								<option value="3">Jetty 3</option>
								<option value="4">Jetty 4</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Pickup Date</span>
					<input class="datepicker input100" type="text" name="pickupdate" placeholder="MM/DD/YYYY" autocomplete="off" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Operation Time (6AM-9PM)</span>
					<input class="input100" type="time" name="operationtime" min="06:00" max="21:00" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Owner Name</span>
					<input class="input100" type="text" id="owner" name="ownername" autocomplete="off" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" id="credit_cards">
					<img src="build/img/visa.jpg" id="visa">
					<img src="build/img/mastercard.jpg" id="mastercard">
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Card Number</span>
					<input class="input100" type="text" id="cardNumber" name="debitnumber" autocomplete="off" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Card CVV</span>
					<input class="input100" type="text" id="cvv" name="debitcvv" maxlength="3" autocomplete="off" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Expiration Month</span>
					<div>
						<select class="selection-2" name="expmonth" autocomplete="off" required>
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
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Expiration Year</span>
					<div>
						<select class="selection-2" name="expyear" autocomplete="off" required>
							<option value="19"> 2019</option>
							<option value="20"> 2020</option>
							<option value="21"> 2021</option>
							<option value="22"> 2022</option>
							<option value="23"> 2023</option>
							<option value="24"> 2024</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Number of Ticket</span>
					<div>
						<select class="selection-2" placeholder="numberofticket" name='quantity' onchange="calculateTotal()" required>
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
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Total Cost</span>
					<div class="wrap-input100 validate-input" id="totalPrice">
				</div>

				<div class="container-contact100-form-btn" id="pay-now">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="paynow" id="confirm-purchase" onclick="">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<a href="../indexuser.php">
						Back to homepage
					</a>
				</div>

			</form>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!-- For card validation -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="build/js/jquery.payform.min.js" charset="utf-8"></script>
	<script src="build/js/cardscript.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="js/main.js"></script>

</script> -->

</body>
</html>
