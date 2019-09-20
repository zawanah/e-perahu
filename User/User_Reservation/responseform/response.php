<!DOCTYPE html><html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link type="text/css" rel="stylesheet" href="response.css" />

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

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

<!-- for ticket calculation -->
<script type="text/javascript" src="build/js/ticketformcalculations.js"></script>


</head>

<body>

<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<!-- <div class="container"> -->
<form method="post" action="User_Reservation.php" id="ticketform">

    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
<!-- </div> -->

</body>
</html>
