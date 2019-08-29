<?php
    //Yang lain jangan tukar... for now. Tukar line 8 saja.
    $servername = "localhost";

    $username = "root";
    $password = "";

    $db = "eperahu"; //ani nama database yang kamu buat di phpmyadmin

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
