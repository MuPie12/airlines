<!DOCTYPE html>
<html lang="en">
<head>
	<title> Se Connecter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
		<header>
		<a href="index2.html"><img src="images/logo.png" alt="logo" width="75px"></a>
		<nav>
		<ul id="navigation">
			<li >
				<a href="index.php" >Reserver</a>
			</li>
			<li>
				<a href="consulter.php">Consulter</a>
			</li>
			<li>
				<a href="formlogin.php">Login</a>
			</li>

		</ul>
		</nav>
	</header>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form  method="POST" action="AuthAdminController.php" class="login100-form validate-form flex-sb flex-w" >
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				<?php
	                if(isset($_GET['erreur'])){
	                    $err = $_GET['erreur'];
	                    if($err==1 )
	                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
               		 }
                ?>

                

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>