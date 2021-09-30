<?php

include('static/connection.php');
include('php/userCreation.php');

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
                        <form id="createUser-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                            <div class="row">
                                <div class="col s12">
                                    <span><h4>Create your user account - create user.php</h4></span>
                                    <div class="row form-font">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input placeholder="Enter your username" type="text" name="createUsername" value="<?php echo htmlspecialchars($createUsername);  ?>">
                                                <div class="red-text"><?php echo $createUserErrors['createUsername']; /* echo $regexErrors['regexCreateUsername']; */ ?></div>
                                                <label for="email">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input placeholder="Enter your password" type="password" name="createUserPassword" >
                                                <div class="red-text"><?php echo $createUserErrors['createUserPassword']; /*echo $regexErrors['regexCreateUserPassword']; */?></div>
										        <label for="password">Password</label>
									        </div>
                                            <div class="input-field">
										        <input placeholder="Confirm your password" type="password" name="createConfirmUserPassword">
                                                <div class="red-text"><?php echo $createUserErrors['createConfirmUserPassword']; /*echo $createUserErrors['createConfirmUserPassword']; echo $regexErrors['regexCreateConfirmUserPassword'];*/ ?></div>
										        <label for="password">Confirm Password</label>
									        </div>
                                            <div class="input-field">
										        <input placeholder="Enter your name" type="text" name="createRealname">
                                                <label for="password">Your name</label>
									        </div>
                                            <label>Job Title</label>
                                            <select class="browser-default">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option name="assistantManager" value="1">Assistant Manager</option>
                                                <option name="deputyManager" value="2">Deputy Manager</option>
                                                <option name="generalManager" value="3">General Manager</option>
                                                <option name="areaManager" value="4">General Manager</option>
                                                <option name="directorOpsManager" value="5">Director / Ops Manager</option>
                                            </select><br>
                                            <!--<label>Venue</label>
                                            <select class="browser-default">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option name="story" value="1">Story</option>
                                                <option name="brassPig" value="2">The Brass Pig</option>
                                                <option name="gravity" value="3">Gravity</option>
                                                <option name="mbargo" value="4">Mbargo</option>
                                                <option name="brassMonkey" value="5">The Brass Monkey</option>
                                                <option name="barThirteen" value="5">Bar Thirteen</option>
                                                <option name="twistedMonkey" value="5">The Twisted Monkey</option>
                                            </select><br> -->
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