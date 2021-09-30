<?php
session_start();
include('static/connection.php');
include('static/functions.php');

if( isset( $_POST['loginUserBtn'] ) ) {

    $loginFormUsername = validateFormData($_POST['existingUsername']);
    $loginFormPassword = validateFormData($_POST['existingUserPassword']);

    // include('static/connection.php');

    $loginQuery = "SELECT real_name, user_password FROM users WHERE user_name = '$loginFormUsername'";

    $loginResult = mysqli_query( $connection, $loginQuery);

    if( mysqli_num_rows( $loginResult) > 0 ){

            while( $loginRow = mysqli_fetch_assoc($loginResult) ) {

                $loginRealName = $loginRow['real_name'];
                $loginHashPass = $loginRow['user_password'];

            }

            if( password_verify( $loginFormPassword, $loginHashPass ) ) {

                $_SESSION['LoggedInUser'] = $loginRealName;

                header("Location: pages/indexLevel2.php");
            } else {
                $loginError = "Wrong Username / Password combination. Please Try again";
            }

    } else {
        $loginError = "No such user in the database. Please Try again";
    }
}

//closes mysqli connection
mysqli_close($connection);
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
                                    <span><h4>User Login</h4></span>
                                    <div class="row form-font">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input placeholder="Enter your username" type="text" name="existingUsername" />
                                                <div class="red-text"><?php echo $loginErrors['loginUsernameError']; ?></div>
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input placeholder="Enter your password" type="password" name="existingUserPassword" />
                                                <div class="red-text"><?php echo $loginErrors['loginPasswordError']; ?></div>
										        <label for="userPassword">Password</label>
									        </div>
                                            <div class="row">
                                                <label style="float: right;">
									                <a class="pink-text" href="#!"><b>Forgot Password?</b></a>
								                </label>
                                            </div>
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <button class="btn-flat waves-effect waves-custom" type="submit" name="loginUserBtn"><i class="material-icons left">account_box</i>Login</button>
                                                </div>
                                                <div class="col s2"></div>
                                            </div>
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <a class="btn-flat waves-effect waves-custom" href="createUser.php" name="btn_create"><i class="material-icons left">create</i>Create User</a>
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