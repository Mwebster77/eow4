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
                        <form id="createUser-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                            <div class="row">
                                <div class="col s12">
                                    <span><h4>Create your user account</h4></span>
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
                                            <!-- <label>Job Title</label>
                                            <select class="browser-default">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option name="assistantManager" value="1">Assistant Manager</option>
                                                <option name="deputyManager" value="2">Deputy Manager</option>
                                                <option name="generalManager" value="3">General Manager</option>
                                                <option name="areaManager" value="4">General Manager</option>
                                                <option name="directorOpsManager" value="5">Director / Ops Manager</option>
                                            </select><br> -->
                                            <div class="input-field">
                                            <div class="red-text"><?php echo $createUserErrors['createUserVenue']; /*echo $createUserErrors['createConfirmUserPassword']; echo $regexErrors['regexCreateConfirmUserPassword'];*/ ?></div>
                                                <select class="browser-default" name="createUserVenue">
                                                    <option value="" disabled selected>Choose your Venue</option>
                                                    <option value="1">Bar Thirteen</option>
                                                    <option value="2">The Brass Monkey</option>
                                                    <option value="3">The Brass Pig</option>
                                                    <option value="4">Gravity</option>
                                                    <option value="5">Mbargo</option>
                                                    <option value="6">Story</option>
                                                    <option value="7">The Twisted Monkey</option>
                                                    <option value="8">Blokzero Group</option>                                                    
                                                </select>
                                            </div><br>

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

<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

<?php require('static/footer.php'); ?>
</html>