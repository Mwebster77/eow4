<?php

    $server = "localhost";
    $username = "Matthew";
    $password = "Liquid328";
    $db = "blokzero";
    
    //create a connection
    $connection = mysqli_connect( $server, $username, $password, $db);

    // $host_name = 'db5001325749.hosting-data.io';
    // $user_name = 'dbu1312555';
    // $password = 'Q8jA6bA!5d5JjaH';
    // $database = 'dbs1127892';
    
    // //creates connection
    // $connection = mysqli_connect($host_name, $user_name, $password, $database);


    
    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() );
    }
?>
