<!DOCTYPE html>
<html>
<head>
	<title>Consulter Reservation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Consulter
					</span>

					<span class="txt1 p-b-11">
						Nom passager
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Numero reservation
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="text" name="num-reserv" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Rechercher ma reservation
						</button>
					</div>
					<?php  if(isset($_GET['erreur'])){
	                    $err = $_GET['erreur'];
	                    if($err==2 )
	                        echo "<p style='color:red'>Reservation inexistante</p>";
               		 }
               		 ?>

				</form>
			</div>
		</div>
	</div>
		

	</div>
</body>
</html>