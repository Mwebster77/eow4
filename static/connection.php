<?php

    $server = "localhost";
    $username = "Matthew";
    $password = "Liquid328";
    $db = "blokzero";

    // $host_name = 'db5001325749.hosting-data.io';
    // $user_name = 'dbu1312555';
    // $password = '26P!!w2kbL95UXc';
    // $database = 'dbs1127892';
  
    // $connection = mysqli_connect($host_name, $user_name, $password, $database);

    //create a connection
    $connection = mysqli_connect( $server, $username, $password, $db);
    
    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() );
    }
?>
