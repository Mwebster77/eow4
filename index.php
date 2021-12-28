<?php

include('static/login.php');
include('static/header.php'); 
?>

    <div class="container">

        <div class="row" >
            <div class="center-align col-height">
                <div class="col s2 m2 l1"></div> <!-- spacer column -->

                <div class="col s8 m8 l5 hide-on-med-and-down">
                    <div class="slider">
                        <ul class="slides blue-grey lighten-2">
                        <li>
                            <img src="images/login/Bar13Logo.png">
                        </li>
                        <li>
                            <img src="images/login/BrassMonkeyLogo.png">
                        </li>
                        <li>
                            <img src="images/login/BrassPigLogo.png">   
                        </li>
                        <li>
                            <img src="images/login/GravityLogo.png">
                        </li>
                        <li>
                            <img src="images/login/mbargoLogo.png">
                        </li>
                        <li>
                            <img src="images/login/StoryLogo.png">
                        </li>
                        <li>
                            <img src="images/login/TMLogo.png">
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
                                                <div class="red-text"><?php echo $loginErrors['loginUsernameError']; echo $loginErrors['loginGeneralError']; echo $loginErrors['loginNoUserError'];?></div>
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input placeholder="Enter your password" type="password" name="existingUserPassword" />
                                                <!-- <div class="red-text"><?php echo $loginErrors['loginPasswordError']; ?></div> -->
										        <label for="userPassword">Password</label>
									        </div>
                                            <!-- <div class="row">
                                                <label style="float: right;">
									                <a class="pink-text" href="#!"><b>Forgot Password?</b></a>
								                </label>
                                            </div> -->
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <button type="submit" class="btn-flat waves-effect waves-custom" name="loginUserBtn"><i class="material-icons left">account_box</i>Login</button>
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
<!-- Compiled and minified JavaScript -->
<script src="js/materializeInit.js"></script>
<?php require('static/footer.php'); ?>
</html>