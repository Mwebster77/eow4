<?php

    include('php/connection.php');

    //validates data for create user form
    if( isset( $_POST["createUserBtn"])){

        // $createUsername = "";
        // $createUserPassword = "";
        
        function validateFormData( $formData ) {
            $formData = trim( stripcslashes( htmlspecialchars( $formData)));
            return $formData;
        }

        if( !$_POST["createUsername"]){
            $createUsernameError = "Enter a username <br>";
        } else {
            $createUsername = validateFormData( $_POST["createUsername"]);
        }

        if( !$_POST["createUserPassword"]){
            $createUserPasswordError = "Enter a Password <br>";
        } else {
            $createUserPassword = validateFormData( $_POST["createUserPassword"]);
        }

        if( $createUsername && $createUserPassword) {
            
            $query = "INSERT INTO users (user_id, userName, userPassword) VALUES (NULL, '$createUsername', '$createUserPassword')";

            if( mysqli_query( $connection, $query)){
                header("Location: index.php");
            } else {
                echo "Error: ".$query."<br>".mysqli_error($connection);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require('static/header.php'); ?>

<!-- <?php
    $createUsernameError = "";
    $createUserPasswordError = "";
?> -->


<div class="col s8 m8 l5 valign-wrapper">
    <div class="container">
        <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
            <div class="row">
                <div class="col s12">
                    <span><h4>Create your user account - create user.php</h4></span>
                    <div class="row form-font">
                        <div class="col s12">
                            <div class="input-field">
                                <a class="red-text"><?php echo $createUsernameError; ?></a>
                                <input placeholder="Enter your username" type="text" name="createUsername">
                                <label for="email">Username</label>
                            </div>
                            <div class="input-field">
                                <a class="red-text"><?php echo $createUserPasswordError; ?></a>
                                <input placeholder="Enter your password" type="password" name="createUserPassword">
                                <label for="password">Password</label>
                            </div>
                            <div class="row left-align">
                                <div class="col s2"></div>
                                <div class="col s8">
                                    <button class="btn-flat waves-effect waves-custom" type="submit" name="createUserBtn"><i class="material-icons left">create</i>Create Account</button>
                                </div>
                                <div class="col s2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require('static/footer.php'); ?>
</html>