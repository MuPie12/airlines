<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Administrateur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style8.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<div id="main-wrapper">

		<header>
			<div id="accueil">

				<div class="container">

					    <a class="btn navbar-btn btn-danger pull-right  " role="button" href="deconnexion.php">Logout</a>
				</div>
				<img src="images/admin.png" width="100" height=" 100" >


					<h1>Bienvenue Dans votre Espace Administrateur</h1>
			</div>
		</header>
		<br> <br>
			<div id="contenu">
				<h3> Veuillez Cliquez sur l'un des boutons en dessous pour effectuer une tache </h3>
				<br> <br>
				<div class="contenu-boutton">






				        	<div class="btn-group">
											<button type="button"
											class="btn btn-primary  btn-lg dropdown-toggle " data-toggle="dropdown">
											Gerer  vol <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
											<li><a href="creer-vol.php">Creer vol</a></li>
											<li class="divider"></li>
											<li><a href="modifier-vol.php">Modifier vol</a></li>
											<li class="divider"></li>
											<li><a href="annuler-vol">Annuler Vol</a></li>
											</ul>
								</div>


								<div class="btn-group">
											<button type="button"
											class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
											Gerer  reservation <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
											<li><a href="valider-reserv.php">Valider</a></li>
											<li class="divider"></li>
											<li><a href="liste-reservation.php">lister reservation</a></li>
											<li class="divider"></li>
											<li><a href="creer-reservation.php">Ajouter reservation</a></li>
											<li class="divider"></li>
											<li><a href="suppr-reserv.php">Supprimer reservation</a></li>
											</ul>
								</div>

								<div class="btn-group">
											<button type="button"
											class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
											Gerer  Avion <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
											<li><a href="affecter-avion.php">Affecter avion a un vol</a></li>
											<li class="divider"></li>
											<li><a href="liste-avion.php">Lister les avions </a></li>
											<li class="divider"></li>
											<li><a href="disponibilite-avion.php">Verifier disponibilité de l'avion</a></li>
											</ul>
								</div>





				</div>


			</div>











</body>
</html>
