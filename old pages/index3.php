<?php
session_start();

include('static/Functions.php');
$loginErrors = array('loginUsernameError' => '', 'loginPasswordError' => '', 'loginGeneralError' => '');

    if( isset($_POST['loginUserBtn'] ) ) {

        $formUsername = validateFormData($_POST['existingUsername']);
        $formPassword = validateFormData($_POST['existingUserPassword']);

        //database connection
        include('static/connection.php');

        //creates the query to access the user database - takes the row names after select
        $loginQuery = "SELECT real_name, user_password, user_authority_level FROM users WHERE user_name ='$formUsername'";


        //Stores the result of the query
        $loginResult = mysqli_query($connection, $loginQuery);

        //verifies the result if returned
        if( mysqli_num_rows($loginResult) > 0 ) {

            // stores basic user data in variables
            //
            while( $loginRow = mysqli_fetch_assoc($loginResult) ){

                $loginRealname = $loginRow['real_name'];
                $loginAuthLevel = $loginRow['user_authority_level'];
                $loginHashedPass = $loginRow['user_password'];

            }
            
            // verifies hashed passwords with submitted password
            // if((password_verify($formPassword, $loginHashedPass)) && $loginAuthLevel == 1){
            
                if(password_verify($formPassword, $loginHashedPass)){

                //correct login details
                //store data in SESSION variables
                //sends user to Authority Level 1 page
                $_SESSION['loggedInUser'] = $loginRealname;
                // header("Location: pages/indexLevel1.php");

                echo($loginRealname . "<br>" . $loginAuthLevel);

            // } elseif ((password_verify($formPassword, $loginHashedPass)) && $loginAuthLevel == 2){

            //     //correct login details
            //     //store data in SESSION variables
            //     //sends user to Authority level 2 page
            //     $_SESSION['loggedInUser'] = $loginRealname;
            //     header("Location: pages/indexLevel2.php");

            } else {
                // hashed password didn't match or verify
                // error message
                $loginErrors['loginUsernameError'] = "Wrong username entered, please try again";
                $loginErrors['loginPasswordError'] = "Wrong password entered, please try again";
            }

        } else {
            // if no results 
            $loginErrors['loginGeneralError'] = "No such user in the database. Please try again";
        }        

        //closes mysqli connection
        mysqli_close($connection);
    }

require('static/header.php'); 
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
                                                <div class="red-text"><?php echo $loginErrors['loginUsernameError']; echo $loginErrors['loginGeneralError']; ?></div>
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