<?php
    //main connection to the database
    $con = mysqli_connect("localhost","root","","loginsystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
