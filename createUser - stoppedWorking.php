<?php
    include('php/connection.php');
    // include('php/validateForm.php');

$usernameError = $userPasswordError = "";


    $usernameError = $userPasswordError = "";
    //validates data for create user form
    if( isset( $POST["createUserBtn"])){

        $createUsername = "";
        $createUserPassword = "";

        //function that validates data
        function validateFormData($formData) {
            $formData = trim( stripslashes( htmlspecialchars( $formData)));
            return formData;
        }

        $createUsername = $createUserPassword = "";

        if( !$_POST["createUsername"]) {
            $usernameError = "Please enter a username <br>";
        } else {
            $createUsername = validateFormData( $_POST["createUsername"]);
        }
    
        if(!$_POST["createUserPassword"]) {
            $userPasswordError = "Please enter a username <br>";
        } else {
            $createUserPassword = validateFormData( $_POST["createUserPassword"]);
        }
    
        if( $createUsername && $createUserPassword){
            
            $query = "INSERT INTO users (user_id, user_name, user_password, logged_in) VALUES (NULL, '$createUsername', '$createUserPassword', CURRENT_TIMESTAMP)";

            if ( mysqli_query($connection, $query)){
    
                echo "New Record added successfully";
    
            } else {
    
                echo "Error: ".$query."<br>".mysqli_error($connection);
    
            }

        }



    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require('static/header.php'); ?>

    <div class="container">
        <div class="row" >
            <div class="center-align col-height">
                <div class="col s2 m2 l1"></div> <!-- spacer column -->

                <div class="col s8 m8 l5 hide-on-med-and-down">
                    <div class="slider">
                        <ul class="slides blue-grey lighten-2">
                        <li>
                            <img src="images/login/BarThirteen-Logo.png">
                        </li>
                        <li>
                            <img src="images/login/Brass-Monkey-white.png">
                        </li>
                        <li>
                            <img src="images/login/Brass-Pig-Logo.png">   
                        </li>
                        <li>
                            <img src="images/login/Story_Logo.png">
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col s8 m8 l5 valign-wrapper">
                    <div class="container">
                        <form id="login-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                            <div class="row">
                                <div class="col s12">
                                    <span><h4>Create your user account - create user.php</h4></span>
                                    <div class="row form-font">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <?php echo $usernameError; ?>
                                                <input placeholder="Enter your username" type="text" name="createUsername">
                                                <label for="email">Username</label>
                                            </div>
                                            <div class="input-field">
                                                <?php echo $userPasswordError; ?>
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
                <div class="col s2 m2 l1"></div> <!-- spacer column -->
            </div>
        </div>

<?php require('static/footer.php'); ?>
</html>