<?php

    include('php/connection.php');

    // selects ALL from the users table in the blokzero database
    $query = "SELECT * FROM users";
    
    // makes a connection and assigns the results of the query to a variable called result
    $result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 2</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    <?php
    // checks number of rows in the if statement, if it is greater than (>) then it returns data
    if(mysqli_num_rows($result) > 0 ) {
        //outputs the data

        // echos out data in a html table
        echo "<table class='highlight responsive-table'><thead><tr><th>User ID</th><th>Username</th><th>Password</th><th>Authority Level</th></tr></thead>"; //using materialize CSS classes and functions

        while($row = mysqli_fetch_assoc($result) ) { //fetches the result

            echo "<tr><td>". $row["user_id"] ."</td><td>". $row["user_name"] ."</td><td>". $row["user_password"] ."</td><td>". $row["user_authority_level"] ."</td><td>". $row["logged_in"] ."</td></tr>";
        }

        echo "</table>";

    } else {
        echo "No results found";
    }


    // echo $_POST['createUsername']."<br>".$_POST['createUserPassword'];

    mysqli_close($connection); // closes the connection

    ?>



</body>
</html>