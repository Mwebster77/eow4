<?php

    $server = "localhost";
    $username = "Matthew";
    $password = "crc152";
    $db = "blokzero";

    //create a connection
    $connection = mysqli_connect( $server, $username, $password, $db);

    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() );
    }

    
?>
