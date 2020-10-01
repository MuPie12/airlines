<?php
// Start the session
session_start();
			 		//detruire toutes les variables de session
			 		$_SESSION=array();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vols disponible</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style6.css">

	<style>

            tr{transition: all ease-in-out .25s}
            .selected{background-color:#c0dded;color:#fff;font-weight: bold}

        </style>
</head>

<body>
	<?php

		if (isset($_POST['ville-depart']) && isset($_POST['Text1'])){
			$_SESSION['date-arrivee']= $_POST['Text1'];

		}
		$_SESSION['ville-arrivee']= $_POST['ville-arrivee'];
		//set session variables
		$_SESSION['ville-depart']= $_POST['ville_depart'];

		$_SESSION['date-depart']= $_POST['Text'];

		$_SESSION['nbplace']= $_POST['qte'];
		$_SESSION['nbplace1']= $_POST['qte1'];
		$_SESSION['classe']=$_POST['classe'];

		print_r($_SESSION);

?>

	<header>
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt="logo" width="75px"></a>
		</div>
	</header>

	<div id="contenu">
		<div>
			<h1> Selectionnez un vol</h1>
		</div>
		<div>
			<p>Selectionnez votre vol. les prix sont par passager et taxes incluses</p>
		</div>
		<hr>

	<form action="voyageurs.php" method="POST">
	<div class="destination">
		<h2><img src="images/al.png" alt="logo decollage" width="60" height="60"><?php echo $_POST['ville_depart']; ?> -- <img src="images/att.png" alt="logo atterissage" width="60" height="60"><?php echo $_POST['ville-arrivee']; ?></h2>
	</div>


	<div id="table-vols">

		 <table  border="1" cellspacing="5" cellpadding="5" align="center">
						 	 <caption>
						  		  Vols Disponibles
						 	 </caption>
						  <tbody>
						    <tr id="first-tr">
						      <th scope="col">Numero vol </th>
						      <th scope="col">Date depart </th>
						      <th scope="col">date Arrivée</th>
						      <th scope="col">Heure depart </th>
						      <th scope="col">Heure arrivée </th>

						      <th scope="col"> Prix Economique</th>
						      <th scope="col"> Prix Business</th>
						      <th>choix</th>
						    </tr>


	<!--connexion a la base de données-->
	<?php
		// Sous WAMP (Windows)
			try{
			$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
			}
			catch(Exception $e) {
				die('Erreur: '. $e->getMessage());
			}

			//requete
			$reponse = $bdd->query('SELECT * FROM vol');

			//on affiche chaque entrée

			while ($donnees = $reponse->fetch())
				{
					?>
					    <p>

						    <tr>
						    	<td><?php echo $donnees['numvol']; ?></td>
						      <td><?php echo $donnees['datedepart']; ?></td>
						      <td><?php echo $donnees['datearrivee']; ?></td>
						      <td><?php echo $donnees['heuredepart']; ?></td>
						      <td><?php echo $donnees['heurearrivee']; ?></td>

						      <td name='prix-eco'><?php echo $donnees['prix']; ?></td>
						      <td name='prix-business'> <?php echo $donnees['prix'] + 15000; ?></td>

						      <td><input type="radio" name="choix-vol" class="choix-vol" value=<?php echo $donnees['numvol'] ?>  required=""></td>
						    </tr>

					<?php
					}

						$reponse->closeCursor(); // Termine le traitement de la requête
					?>


						</p>
					</tbody>
				</table>
			</div>

			<div>
				<input type="submit" value="Continuer">
			</div>
			</form>
		</div>
	</body>
	</html>
