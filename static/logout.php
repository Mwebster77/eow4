<?php

// asks if the browser send a cookie for the session
if( isset( $_COOKIE[ session_name() ] ) ) {

    // empties the cookie
    setcookie( session_name(), '', time()-86400, '/');

}

    // clears all session variables
    session_unset();

    //destroys the session
    session_destroy();

    header( "Location: ../index.php");
?>

<?php
    
?>