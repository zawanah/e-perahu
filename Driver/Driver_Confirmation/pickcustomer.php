<?php include('../../User/server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>CONFIRMATION</title>

    <!-- Favicon -->
    <link rel="icon" href="img/e-perahu.png">

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
                    <a class="nav-brand" href="../Driver_Dashboard/Driver_dashboard.php"><img src="img/e-perahu.png" alt=""></a>

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


                            <!-- Back to dashboard button -->
                            <a href="../Driver_Dashboard/Driver_dashboard.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Back to dashboard <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

<section class="" style=" padding-top: 150px; padding-bottom: 30px; background-image: #ffffff">
    <?php
            $sql = "SELECT firstname, lastname, email, phone, pickup, destination, pickupdate, operationtime FROM reservationdriver WHERE id = '" . $_SESSION['id'] . "'";

            $result = mysqli_query($db2, $sql);
            $row = mysqli_fetch_array($result);
    ?>
    <div class="displayPic" style="text-align: center; font-size: 40px" >
        <p class="text-danger">Please take note/screenshot this before proceeding!</p>

    </div><br>
    <div class="media-body" style="text-align: center;">
        <div class="personal_text">
            <?php

                    echo "Fullname:  " . $row['firstname'] . " ". $row['lastname'] ."<br/><br/>". "Email: ". $row['email'] . "<br/><br/>" . "Phone No: ". $row['phone'] . "<br/><br/>" . "From: Jetty " . $row['pickup'] . "<br/><br/> To: Jetty " . $row['destination'] ."<br/><br/> Date & Time: " . $row['operationtime'] . " " . $row['pickupdate'] . "";
            ?> 

            <!-- Button -->
            <div class="col-12"><br>
                <a href="../Driver_ListOfCustomer/Driver_ListOfCustomer.php?del=<?php $_SESSION['id'] = $id; ?>"><button type="submit" name="del" class="btn btn-primary">Proceed </button></a>
                &nbsp; &nbsp; &nbsp;
                <a href="editprofile.php"><button type="submit" class="btn btn-danger">Cancel </button></a>
            </div>
        </div>
    </div>
</section>                        

    

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
