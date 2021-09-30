
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blokzero - EOW</title>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../css/blokzero.css">

</head>

<body class="blokzero-font grey lighten-5 blue-grey-text text-darken-3">

    <nav class="blue-grey lighten-1 z-depth-0">
        <div class="nav-wrapper blue-grey lighten-1 z-depth-0">

                <a href="#" class="header-logoEow">BLOKZERO</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        
                        <li><div class="chip"> 
                            <?php 
                                echo $_SESSION['loggedinUser'];
                            ?>
                        </div></li>
                        <li><a href="../static/logout.php"><div class="waves-effect waves-custom btn-flat blue-grey light-2 center-align grey-text text-lighten-5" id="logoutUser" >Log Out</div></a></li>
                    </ul>
                <a href="#" data-target="header-content" class="sidenav-trigger"><i class="material-icons sidenav-darkbg">menu</i></a>
                
        </div>
	</nav>

	<ul class="sidenav" id="header-content">
		<li><a class="waves-effect waves-custom btn-flat blue-grey light-2 center-align grey-text text-lighten-5" id="logoutUser" >Log Out</a></li>
  	</ul>

    <!-- spacer row -->
    <div class="row">
        <div class="col s12"></div>
    </div>