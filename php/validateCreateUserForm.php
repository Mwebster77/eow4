<?php

    define( "TITLE", "GET &amp; POST");

    //validates data for create user form
    if( isset( $POST["createUserBtn"])){

        //function that validates data
        function validateFormData($formData) {
            $formData = trim( stripslashes( htmlspecialchars( $formData)));
            return formData;
        }

        if( !$_POST["createUserName"]) {
            $createUsernameError = "Please enter a username <br>";
        } else {
            $createUserName = validateFormData( $_POST[createUserName]);
        }
    
        if(!$_POST["createUserPassword"]) {
            $createUserPasswordError = "Please enter a username <br>";
        } else {
            $createUserPassword = validateFormData( $_POST[createUserPassword]);
        }
    
    }

?>