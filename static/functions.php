<?php
//cleans the form to prevent injection attacks

function validateFormData($formdata){
    $formdata = trim( stripslashes( htmlspecialchars( strip_tags( str_replace( array( '(', ')' ), '', $formdata) ), ENT_QUOTES) ) );
    return $formdata;
}

?>