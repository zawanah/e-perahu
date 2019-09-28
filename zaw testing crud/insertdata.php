<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2> PHP - CRUD : ADD Data </h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for=""> First Name </label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Last Name </label>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Contact </label>
                    <input type="text" name="contact" class="form-control" placeholder="Enter Contact" required>
                </div>

                <button type="submit" name="insert" class="btn btn-primary"> Save Data </button>

                <a href="index.php" class="btn btn-danger"> BACK </a>
            </form>
        </div>
    </div>
</body>
</html>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['insert']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO student(`fname`,`lname`,`contact`) VALUES ('$fname','$lname','$contact')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
