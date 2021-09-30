<?php
session_start();

include('static/functions.php');


$loginErrors = array('loginUsernameError' => '', 'loginPasswordError' => '', 'loginGeneralError' => '', 'loginNoUserError' => '');
if(isset($_POST["loginUserBtn"] ) ) {

    $loginFormUsername = validateFormData($_POST['existingUsername']);
    $loginFormPassword = validateFormData($_POST['existingUserPassword']);
   
    include('static/connection.php');


    $loginQuery = "SELECT real_name, user_password, user_authority_level, user_name FROM users WHERE user_name ='$loginFormUsername'";


    $loginResult = mysqli_query($connection, $loginQuery);

    if( mysqli_num_rows($loginResult) > 0 ) {

        while( $row = mysqli_fetch_assoc($loginResult) ){

            $returnRealName = $row['real_name'];
            $returnAuthLevel = $row['user_authority_level'];
            $returnUsername = $row['user_name'];
            $returnHashPass = $row['user_password'];
        }

        if( password_verify( $loginFormPassword, $returnHashPass) && $returnAuthLevel == 1 ) {

            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: pages/indexLevel1.php");

        } else if ( password_verify( $loginFormPassword, $returnHashPass) && $returnAuthLevel == 2 ){
         
            // need more if / else if statments to redirect to correct venue
            $_SESSION['loggedinUser'] = $returnRealName;
            header( "Location: pages/indexLevel2.php");
        } else {
            echo "You need to email Matthew to get an authority level";
        }
    } else {

        $loginErrors['loginNoUserError'] = 'Username not found <br>';
    }
    mysqli_close($connection);
}

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
                                                <div class="red-text"><?php echo $loginErrors['loginUsernameError']; echo $loginErrors['loginGeneralError']; echo $loginErrors['loginNoUserError'];?></div>
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input placeholder="Enter your password" type="password" name="existingUserPassword" />
                                                <!-- <div class="red-text"><?php echo $loginErrors['loginPasswordError']; ?></div> -->
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
                                                    <button type="submit" class="btn-flat waves-effect waves-custom" name="loginUserBtn"><i class="material-icons left">account_box</i>Login</button>
                                                </div>
                                                <div class="col s2"></div>
                                            </div>
                                            <div class="row left-align">
                                                <div class="col s2"></div>
                                                <div class="col s8">
                                                    <a class="btn-flat waves-effect waves-custom" href="../createUser.php" name="btn_create"><i class="material-icons left">create</i>Create User</a>
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