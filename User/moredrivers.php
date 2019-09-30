<?php include('../Admin/Admin_Login/server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Title -->
    <title>Admin List Of Driver</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="./img/core-img/favicon.png"> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="indexuser.php"><img src="img/e-perahu.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="indexuser.php">Home</a></li>
                                <li><a href="#">Information</a>
                                    <ul class="dropdown">
                                        <li><a href="profile.php">- My Profile</a></li>
                                        <li><a href="index.php">- Schedule</a></li>
                                        <li><a href="about.php">- Ticket Price</a></li>
                                        <li><a href="speakers.php">- drivers</a></li>
                                        <li><a href="schedule.php">- promotion</a></li>


                                    </ul>
                                </li>
                                <li><a href="User_Reservation/User_Reservation.php">Reservation</a></li>
                                <li><a href="blog.php">About Us</a></li>
                                <li><a href="contact.php">Feedback</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="speakers.php?logout='1'" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->


    <!-- Our Blog Area Start -->
    <div style="padding-top: 180px; " class="our-blog-area section-padding-60">
          <div class="container">
          &nbsp;

<!--table start -->
            <table class="table">
            <thead class="thead-dark">
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Boat Reg No</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "registration");
                  // Check connection
                  if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT fname, email, reg_no FROM driver";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {


                  echo "<tr>
                   <td>" . $row["fname"] . "</td>
                   <td>". $row["email"]. "</td>
                   <td>". $row["reg_no"]. "</td>

                   <td><a href='#'><button type='submit' name='edit' class='btn btn-outline-primary btn-lg'>Show Profile</button></a></td>

                   </tr>"  ;


                  }
                  echo "</table>";
                  } else { echo "0 results"; }
                  $conn->close();
                  ?>

              </tbody>
            </table>
          </div>
          &nbsp;

<!--table End-->

<!-- Footer Area Start -->
<!-- <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0"> -->
    <!-- Main Footer Area -->
   <!--  <div class="main-footer-area">
        <div class="container">
            <div class="row"> -->


                <!-- Single Footer Widget Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-3"> -->
                    <!-- <div class="single-footer-widget mb-60"> -->
                        <!-- Widget Title -->
                        <!-- <h5 class="widget-title">Contact</h5> -->

                        <!-- Contact Area -->
                        <!-- <div class="footer-contact-info">
                            <p><i class="zmdi zmdi-map"></i> Bandar Seri Begawan</p>
                            <p><i class="zmdi zmdi-phone"></i> (+673) 1234567</p>
                            <p><i class="zmdi zmdi-email"></i> e-perahu@gmail.com</p>
                            <p><i class="zmdi zmdi-globe"></i> www.e-perahu.com</p>
                        </div>
                    </div>
                </div>
 -->


    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
