<?php

$createUsername = $createUserPassword = $createConfirmUserPassword = $createRealname = $createUserVenue = "";
$createUserErrors = array('createUsername' => '', 'createUserPassword' => '', 'createConfirmUserPassword' => '' , 'createRealname' => '' , 'createUserVenue' => '');
include('static/functions.php');

if( isset( $_POST["createUserBtn"])) {

    //checks username is empty
    //if empty, asks for a username from the user.
    //if then ok send the variable to the form
    if(empty($_POST["createUsername"])){

        $createUserErrors['createUsername'] = 'Please enter a Username <br>';

    } else {
        $createUsername = validateFormData($_POST["createUsername"]);
    }

    // checks password is empty
    //if empty, as for a password from the user
    //if then ok send the variable to the form

    if(empty($_POST["createUserPassword"])){

        $createUserErrors['createUserPassword'] = 'Please enter a Password <br>';

    } else {
        $createUserPassword = validateFormData($_POST["createUserPassword"]);
        $createHashPass = password_hash($createUserPassword, PASSWORD_DEFAULT);
    }

    //Checks if user password is confirmed
    if(empty($_POST["createConfirmUserPassword"])){

        $createUserErrors['createConfirmUserPassword'] = 'Please enter a Password <br>';

    } elseif ($_POST["createConfirmUserPassword"] !== $_POST["createUserPassword"]) {

        $createUserErrors["createConfirmUserPassword"] = "Passwords don't match <br>";

    } else {   
        $createConfirmUserPassword = validateFormData($_POST["createConfirmUserPassword"]);
        $createConfirmHashPass = password_hash($createConfirmUserPassword, PASSWORD_DEFAULT);
    }

    //checks if users real name is empty
    if(empty($_POST["createRealname"])){

        $createUserErrors['createRealname'] = 'Please enter your name.';
    } else {

        $createRealname = validateFormData($_POST["createRealname"]);
    }

    //checks the authority level
    if(empty($_POST["createUserVenue"])){

        $createUserErrors['createUserVenue'] = 'Please enter your venue.';
    } else {

        $createUserVenue = validateFormData($_POST["createUserVenue"]);
    }


    //submits data if fields are valid
    if( $createUsername && ($createUserPassword == $createConfirmUserPassword && ( $createUserPassword !== '' && $createConfirmUserPassword !== ''))){    

        $createUserQuery = "INSERT INTO users (user_id, real_name, user_name, user_password, user_venue, logged_in) VALUES (NULL, '$createRealname', '$createUsername', '$createHashPass', '$createUserVenue', CURRENT_TIMESTAMP)";

            If( !mysqli_query($connection, $createUserQuery)){
                echo "Error: ". $createUserQuery."<br>". mysqli_error($connection);
                
            } else {
                //echo "new record added";
                header('location: index.php');
            }
        }
};

?>