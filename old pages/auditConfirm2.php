<?php
include('../static/functions.php');


if( isset( $_POST["confirmResultBtn"] ) ) {
    
  $auditScore = validateFormData($_POST['auditToSend']);
  $venueScore = validateFormData($_POST['venueToSend']);

    $auditQuery = "INSERT INTO bar13 (venueScore, auditScore, submissionDate) VALUES ('$venueScore', '$auditScore', CURRANT_TIMESTAMP)";

    if(!mysqli_query($connection, $auditQuery)){
        echo "Error: ". $auditQuery."<br>". mysqli_error($connection);
        
    } else {
                        //echo "new record added";
                        //header('location: bar13.php');
                        echo "your score added!";
    }
  };
?>