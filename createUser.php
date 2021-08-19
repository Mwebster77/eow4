<?php

include('php/connection.php');

$createUsername = $createUserPassword = $createConfirmUserPassword = "";
$createUserErrors = array('createUsername' => '', 'createUserPassword' => '', 'createConfirmUserPassword' => '');
$regexErrors = array('regexCreateUsername' => '', 'regexCreateUserPassword' => '', 'regexCreateConfirmUserPassword' => '');

if( isset( $_POST["createUserBtn"])) {

    function validateFormData( $formdata) {
        $formdata = trim( stripslashes( htmlspecialchars($formdata)));
        return $formdata;
    }

    //checks username is empty
    //if empty, asks for a username from the user.
    //else sends for regex validation
    //if then ok send the variable to the form
    if(empty($_POST["createUsername"])){

        $createUserErrors['createUsername'] = 'Please enter a Username <br>';

    } elseif ($_POST["createUsername"]){

        $regexCreateUsername = $_POST['createUsername'];

        if(!preg_match('/^[a-zA-Z0-9]+$/', $regexCreateUsername)){
            $regexErrors["regexCreateUsername"] = 'Password must be made up of only letters & numbers.';
        }
    } else {
        $createUsername = validateFormData($_POST["createUsername"]);
    }

    // checks password is empty
    //if empty, as for a password from the user
    //else sends for regex validation
    //if then ok send the variable to the form

    if(empty($_POST["createUserPassword"])){

        $createUserErrors['createUserPassword'] = 'Please enter a Password <br>';

    } elseif ($_POST["createUserPassword"]){

        $regexUserPassword = $_POST['createUserPassword'];

        if(!preg_match('/^[a-zA-Z0-9]+$/', $regexUserPassword)){

            $regexErrors["regexCreateUserPassword"] = 'Password must be at least 6 characters of only letters & numbers.';
        }

    } else {
        $createUserPassword = validateFormData($_POST["createUserPassword"]);
    }


    if(empty($_POST["createConfirmUserPassword"])){

        $createUserErrors['createUserPassword'] = 'Please enter a Password <br>';

    } elseif ($_POST["createConfirmUserPassword"] !== $_POST["createConfirmUserPassword"]) {

        $createUserErrors["createConfirmUserPassword"] = "Passwords don't match <br>";

    } elseif ($_POST["createConfirmUserPassword"]){

        $regexCreateConfirmUserPassword = $_POST['createConfirmUserPassword'];

        if(!preg_match('/^[a-zA-Z0-9]+$/', $regexCreateConfirmUserPassword)){

            $regexErrors["regexCreateConfirmUserPassword"] = 'Password must match';
        }

    } else {   
        $createConfirmUserPassword = validateFormData($_POST["createConfirmUserPassword"]);
    }




    if( $createUsername && ($createUserPassword == $createConfirmUserPassword)){
        
        $loginQuery = "INSERT INTO users (user_id, user_name, user_password, logged_in) VALUES (NULL, '$createUsername', '$createUserPassword', CURRENT_TIMESTAMP)";

        If( !mysqli_query($connection, $loginQuery)){
            echo "Error: ". $loginQuery."<br>". mysqli_error($connection);
            
        } else {
            echo "new record added";
            // header('location: index.php');
        }
    }
};
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
                                                <input placeholder="Enter your username" type="text" name="createUsername" value="<?php echo htmlspecialchars($createUserPassword);  ?>">
                                                <div class="red-text"><?php echo $createUserErrors['createUsername']; echo $regexErrors['regexCreateUsername'];  ?></div>
                                                <label for="email">Username</label>
                                            </div>
                                            <div class="input-field">
										        <input placeholder="Enter your password" type="password" name="createUserPassword">
                                                <div class="red-text"><?php echo $createUserErrors['createUserPassword']; echo $regexErrors['regexCreateUserPassword']; ?></div>
										        <label for="password">Password</label>
									        </div>
                                            <div class="input-field">
										        <input placeholder="Confirm your password" type="password" name="createConfirmUserPassword">
                                                <div class="red-text"><?php echo $createUserErrors['createConfirmUserPassword']; echo $createUserErrors['createUserPassword']; echo $regexErrors['regexCreateConfirmUserPassword']; ?></div>
										        <label for="password">Confirm Password</label>
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