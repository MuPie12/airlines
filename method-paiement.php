<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>methode de paimement</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="js/checkable.js"></script>
</head>
<body>
	<?php

		
		$_SESSION['nom']= $_POST['name'];
		$_SESSION['prenom']= $_POST['prenom'];
		$_SESSION['num-passport']= $_POST['numpassport'];
		$_SESSION['civilite']= $_POST['civilite'];
		$_SESSION['email']= $_POST['email'];
		$_SESSION['telephone']= $_POST['tel'];
		$_SESSION['rangee']= $_POST['rangee'];
		$_SESSION['siege']= $_POST['siege'];


		//print_r($_SESSION);


		

		
			
	?>


	<div id="main">
		<header>
			<div>
				<h1> Paiement</h1>
			</div>
		</header>

		<section>
			<form method="post" action="redirection.php">
			<div>
				<p>Total à regler:  <sup>DZD</sup> <?php
								try{
								$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
								}
								catch(Exception $e) {
									die('Erreur: '. $e->getMessage());
								}

								//requete 
								$reponse= $bdd->query('SELECT prix  FROM vol where numvol="'. $_SESSION['choix'].'" ');
								

								//on affiche chaque entrée 
								while ($donnee= $reponse->fetch() ) {
									?>
									
										 <?php 
											if($_SESSION['classe']=='Economique') { 
										 			echo ($donnee['prix']* ($_SESSION['nbplace']+$_SESSION['nbplace1'])) ;
										 			}
										 			else {

										 				$frais=($donnee['prix']+15000)* (($_SESSION['nbplace']+$_SESSION['nbplace1'])) ;
										 				
										 				$_SESSION['frais-total']=$frais;
										 				echo $frais;
										 			} ?>
										 		

								<?php 
								}


										
								$reponse->closeCursor(); // Termine le traitement de la requête

								
								
?> </p>
			</div>
			<div>
				<h3>Selectionner un moyen de paiement:</h3>
				<input type="radio" value="carte-credit" name="method-pay" value="carte-credit" required=""> <label for="carte-credit">Carte de Credit</label> <br>
				<input type="radio" value="cash" name="method-pay" value="cash" required=""> <label for="cash">Payer en agence</label>

			</div>
			<div>
				<h3>Conditions Generales</h3>
				<input type="checkbox" id="checkbox" name="checkbox" required > <label for="checkbox" >Oui, j'ai lu et j'accepte les conditions d'achat</label>
			</div>
			<br>

			<div>
				<input type="submit" name="soumettre" value="Continuer">
			</div>
			</form>


		</section>

	</div>
</body>
</html>
