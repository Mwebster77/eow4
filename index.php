<?php
    include('php/connection.php');
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
                        <form id="login-form">
                            <div class="row">
                                <div class="col s12">
                                    <span><h4>User Login</h4></span>
                                    <div class="row form-font">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input class="validate" placeholder="Enter your username as your email address" type="email" name="email" id="existingUserEmail" />
                                                <label for="email">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input class="validate" placeholder="Enter your password" type="password" name="password" id="existingUserPassword" />
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
                                                    <button name="btn_login" class="btn-flat waves-effect waves-custom"><i class="material-icons left">account_box</i>Login</button>
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