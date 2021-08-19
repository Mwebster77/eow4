<?php
    include('php/connection.php');
    // include('php/validateForm.php');

    define( "TITLE", "GET &amp; POST");

    $newUsernameError = "";
    $newUserPasswordError = "";

    //validates data for create user form
    if( isset( $POST["createUserBtn"])){

        //function that validates data
        function validateFormData($formData) {
            $formData = trim( stripslashes( htmlspecialchars( $formData)));
            return formData;
        }

        if(!$_POST["newUsername"]) {
            $newUsernameError = "Please enter a username <br>";
        } else {
            $newUsername = validateFormData( $_POST[newUsername]);
        }
    
        if(!$_POST["newUserPassword"]) {
            $newUserPasswordError = "Please enter a username <br>";
        } else {
            $newUserPassword = validateFormData( $_POST[newUserPassword]);
        }
    
    }

    // if( isset( $_POST["createUserBtn"])) {
        
    //     function validateFormData( $formData) {
    //         $formData = trim( stripslashes( htmlspecialchars ($formData)));
    //         return $formData;
    //     }

    //     if ($_POST["newUsername"]) {
            
    //         $name = validateFormData ($_POST["newUsername"]);
        
    //     } else {
            
    //         $nameError = "Please enter a Username <br>";
    //     }

    //     if ($_POST["newUserPassword"]) {
            
    //         $password = validateFormData ($_POST["newUserPassword"]);
        
    //     } else {
        
    //         $passwordError = "Please enter a Password <br>";
    //     }

    //     $query = "INSERT INTO users (id, userName, userPassword) VALUES (NULL, '$name', '$password')";

    //     if (mysqli_query( $connection, $query)){
    //         echo "New User created.";
    //     } else {
    //         echo "Error: ". $query. "<br>" . mysqli_error($connection);
    //     }
    // }
    

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
                        <form id="login-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>"
                            <div class="row">
                                <div class="col s12">
                                    <span><h4>User Login - Insert Data.php</h4></span>
                                    <div class="row form-font">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input class="validate" placeholder="Enter your username" type="text" name="existingUsername" id="existingUsername">
                                                <label for="email">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input class="validate" placeholder="Enter your password" type="password" name="userpassword" id="existingUserPassword">
										        <label for="password">Password</label>
									        </div>
                                            <div class="row">
                                                <label style="float: right;">
									                <a class="pink-text" href="#!"><b>Forgot Password?</b></a>
								                </label>
                                            </div>
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <button class="btn-flat waves-effect waves-custom" type="submit" name="add"><i class="material-icons left">account_box</i>Login</button>
                                                </div>
                                                <div class="col s2"></div>
                                            </div>
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <div class="section">
                                                        <!-- Modal Trigger
                                                        <a class="waves-effect waves-custom btn-flat z-depth-0 modal-trigger" data-target="modal-createUser"><i class="material-icons left">create</i>Create Account</a> -->
                                                        <a class="waves-effect waves-custom btn-flat z-depth-0" href="createUser.php"><i class="material-icons left">create</i>Create Account</a>
                                                    </div>
                                                </div>
                                                <div class="col s2"></div>
                                            </div>


                                            <!-- CHANGE THE MODAL TO A LINK to a new page to signup -->


                                        	<!-- Modal Structure -->
                                            <div id="modal-createUser" class="modal">
                                                <div class="modal-content">
                                                <h4>Create New User Account</h4>
                                                    <form id="creatUser-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                                                        <div class="row">
                                                            <div class="input-field col s8 offset-2">
                                                                <?php echo $newUsernameError; ?>
                                                                <input class="validate" placeholder="Enter a Username" type="text" name="newUsername" id="newUsername">
                                                                <label for="email">Enter Your Username</label>
                                                            </div>
                                                            <div class="input-field col s8 offset-2">
                                                                <?php echo $newUserPasswordError; ?>
                                                                <input class="validate" placeholder="Enter your password" type="password" name="newUserPassword" id="newUserPassword">
                                                                <label for="password">Password</label>
                                                            </div>
                                                        </div>
                                                        <button class="waves-effect waves-custom btn-flat z-depth-0" type="submit" name="createUserBtn"><i class="material-icons left">create</i>Create Account</button>
                                                    </form>
                                                </div>
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