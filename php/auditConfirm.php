<?php

include('../static/functions.php');

if( isset( $_GET["confirmResultBtn"])){

    // opens database connection
    include('../static/connection.php');

    $auditQuery = "INSERT INTO bar13_auditscores (audit_ID, audit_date, bar13_VenueScore, bar13_AuditScore) VALUES (NULL, CURRENT_TIMESTAMP, '$vp', '$ap')"; {
        If( !mysqli_query($connection, $auditQuery)){
            echo "Error: ". $auditQuery."<br>". mysqli_error($connection);
            
        } else {
            //echo "new record added";
            header('location: bar13.php');
        }
    }

    // mysqli_close($connection);
};

?>