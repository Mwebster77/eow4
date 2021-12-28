<?php

session_start();

include('static/functions.php');


$loginErrors = array('loginUsernameError' => '', 'loginPasswordError' => '', 'loginGeneralError' => '', 'loginNoUserError' => '');
if(isset($_POST["loginUserBtn"] ) ) {

    $loginFormUsername = validateFormData($_POST['existingUsername']);
    $loginFormPassword = validateFormData($_POST['existingUserPassword']);
   
    include('static/connection.php');


    $loginQuery = "SELECT real_name, user_password, user_venue, user_name FROM users WHERE user_name ='$loginFormUsername'";


    $loginResult = mysqli_query($connection, $loginQuery) or die ("error" . mysqli_error($connection));

    if( mysqli_num_rows($loginResult) > 0 ) {

        while( $row = mysqli_fetch_assoc($loginResult) ){

            $returnRealName = $row['real_name'];
            $returnVenueNum = $row['user_venue'];
            $returnUsername = $row['user_name'];
            $returnHashPass = $row['user_password'];
        }

        if( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 1 ) {

            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/bar13.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 2 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/brassMonkey.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 3 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/brassPig.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 4 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/gravity.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 5 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/mbargo.php");
            
        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 6 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/story.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 7 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/twistedMonkey.php");
            
        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnVenueNum == 8 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: audit/blokzeroGroup.php");

        }       
        // else {
        //     echo "You need to email Matthew to get an authority level";
        // }
    } else {

        $loginErrors['loginNoUserError'] = 'Username not found <br>';
    }
    mysqli_close($connection);
}

?>