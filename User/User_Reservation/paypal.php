<!DOCTYPE html>
<html>
<head>
  <title>jQuery Smart Cart - The smart interactive jQuery Shopping Cart plugin with PayPal payment support</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!-- Include SmartCart CSS -->
  <link href="build/css/smart_cart.min.css" rel="stylesheet" type="text/css" />

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

</head>
<body>
  <br />
  <section class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Packages
          </div>
          <div class="panel-body">
            <div class="row">
              <!-- BEGIN PRODUCTS -->

              <div class="col-md-4 col-sm-6">
                <div class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/1.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">One-Way Trip (BND$1)</h4>

                    <hr class="line">

                    <div>

                      <div class="form-group">
                        <label>Pickup: </label>
                        <select class="form-control input-sm" id="select1" name="pickup" placeholder="from" required>
                          <option> </option>
                            <option value="1">Jetty 1</option>
                            <option value="2">Jetty 2</option>
                            <option value="3">Jetty 3</option>
                            <option value="4">Jetty 4</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>

                      <div class="form-group">
                        <label>Destination: </label>
                        <select class="form-control input-sm" id="select2" name="destination" placeholder="to" required>
                          <option> </option>
                            <option value="1">Jetty 1</option>
                            <option value="2">Jetty 2</option>
                            <option value="3">Jetty 3</option>
                            <option value="4">Jetty 4</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>

                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <input id="datepicker" class="form-control input-sm" type="text" name="pickupdate" placeholder="MM/DD/YYYY" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <input class="form-control input-sm" type="time" name="operationtime" min="06:00" max="21:00" required>

                        </select>
                      </div>

                      <input name="product_price" value="1.00" type="hidden" />
                      <input name="product_id" value="Package1" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <span class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/2.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">Two-Way Trip (BND$2)</h4>


                    <hr class="line">
                    <div>
                      <div class="form-group">
                        <label>Pickup: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Destination: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>

                      <input name="product_price" value="2.00" type="hidden" />
                      <input name="product_id" value="Package2" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </span>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/3.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">Kampong Ayer Tour (BND$7)</h4>


                    <hr class="line">

                    <div>
                      <div class="form-group">
                        <label>Pickup: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Destination: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>

                      <input name="product_price" value="7.00" type="hidden" />
                      <input name="product_id" value="Package3" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <span class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/4.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">Pulau Chermin Tour (BND$14)</h4>


                    <hr class="line">
                    <div>
                      <div class="form-group">
                        <label>Pickup: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Destination: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>

                      <input name="product_price" value="14.00" type="hidden" />
                      <input name="product_id" value="Package4" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </span>
              </div>

              <div class="col-md-4 col-sm-6">
                <span class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/5.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">Istana Nurul Iman Tour (BND$11)</h4>


                    <hr class="line">
                    <div>
                      <div class="form-group">
                        <label>Pickup: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Destination: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>

                      <input name="product_price" value="11.00" type="hidden" />
                      <input name="product_id" value="Package5" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </span>
              </div>

              <div class="col-md-4 col-sm-6">
                <span class="sc-product-item thumbnail">
                  <img data-name="product_image" src="../dist/img/6.png" alt="...">
                  <div class="caption">
                    <h4 data-name="product_name">Full Tour (BND$32)</h4>


                    <hr class="line">
                    <div>
                      <div class="form-group">
                        <label>Pickup: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Destination: </label>
                        <select name="" class="form-control input-sm">
                          <option>Jetty 1</option>
                          <option>Jetty 2</option>
                          <option>Jetty 3</option>
                          <option>Jetty 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pickup Date: </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Operation Time (6AM-9PM): </label>
                        <select name="" class="form-control input-sm">

                        </select>
                      </div>

                      <input name="product_price" value="32.00" type="hidden" />
                      <input name="product_id" value="Package6" type="hidden" />
                      <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </span>
              </div>
              <!-- END PRODUCTS -->
            </div>
          </div>
        </div>

      </div>

      <aside class="col-md-4">
        <!-- Paypal Submit URL : https://www.paypal.com/cgi-bin/webscr -->
        <!-- Paypal Sandbox Submit URL: https://www.sandbox.paypal.com/cgi-bin/webscr -->

        <!-- Paypal Cart submit form -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
          <!-- SmartCart element -->
          <div id="smartcart"></div>

          <!-- Paypal required info, Please update based on your details -->
          <input name="business" value="sb-bghh6253519@business.example.com" type="hidden">
          <input name="currency_code" value="SGD" type="hidden">
          <input name="return" value="https://e-perahu.000webhostapp.com/index.php" type="hidden">
          <input name="cancel_return" value="https://e-perahu.000webhostapp.com/aboutnologin.php" type="hidden">

          <input name="cmd" value="_cart" type="hidden">
          <input name="upload" value="1" type="hidden">
        </form>
      </aside>

    </div>
  </section>

  <!-- Include jQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript" ></script> -->
  <!-- Include SmartCart -->
  <script src="build/js/jquery.smartCart.min.js" type="text/javascript"></script>
  <!-- Initialize -->
  <script type="text/javascript">
  $(document).ready(function(){
    // Initialize Smart Cart
    $('#smartcart').smartCart({
      submitSettings: {
        submitType: 'paypal' // form, paypal, ajax
      },
      toolbarSettings: {
        checkoutButtonStyle: 'paypal' // default, paypal, image
      }
    });
  });
</script>
</body>
</html>
