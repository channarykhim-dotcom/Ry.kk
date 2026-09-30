<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="thursday_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("connection failed: " . mysdli_connection_error());

    }
        echo "connection successfully";




?>