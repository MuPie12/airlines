
<?php
	session_start();
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Voyageurs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
	
	<?php
		$_SESSION['choix']=$_POST['choix-vol'];
		

		//print_r($_SESSION);


	?>
		<form method="post" action="method-paiement.php">
			<?php 
					$place=$_SESSION['nbplace'] + $_SESSION['nbplace1'];
					
					
				 	for ($i=0; $i <$place ; $i++) { 
				 		# code...
				 	
			?>
					<div id="wrapper">
					<div>
						<h3> Voyageur <?php echo $i+1;?></h3>
					</div>

					<div>
						<p> * = champs obligatoire</p>
						
						
						<br>
						<label for="civilite">civilité: 	</label>
							<select name="civilite[]" required="">
								
								<option value="Mr">Mr</option>
								<option value="Mme">Mme</option>
							</select>

						<p><label for="nom"> Nom:  * </label> <input type="text" name="name[]"  id="nom" placeholder="Entrez Votre nom" required> </p>
						<p><label for="prenom"> Prenom:  * </label>	 <input type="text" name="prenom[]" id=prenom placeholder="Entrez votre prenom" required=""></p>
						<p><label for="numpassport">Numero passeport:  *  </label> <input type="text" name="numpassport[]" id="numpassport" placeholder="Entrez votre numero de passeport" required=""></p>
						<br>
						<br>
						

					</div>
					<script type="text/javascript">
						var nom = document.getElementById('nom').value;
					 
					</script>


					

					<div>
						<p>
						 <label for="rangee">  Rangee: </label> <select id="rangee" name="rangee[]" required="">
						 	<option>A</option>
						 	<option>B</option>
						 	<option>C</option>
						 	<option>D</option>
						 	<option>E</option>
						 	<option>F</option>
						 	
						 </select>
						 <label for="siege">NumSiege: </label><input type="text" name="siege[]" id="siege" required="">						
						
					</div>
					<br>
					<hr>
						<br>

			
					
				
	</div>
	<?php   }?>
	

	<hr>
	<br>

	<div class="infos">
		<h3>Informations sur la personne à Contacter</h3>
		<br>
		<p><h5>Vos coordonnées ne sont récoltées qu'aux fins de la réservation </h5></p>
						<p><label for="email">Email: </label> <input type="email" name="email" id="email" placeholder="xyz@example.com" required=""></p>
						<p><label for="tel">Telephone Personnel: </label> <input type="tel" name="tel" id="tel" placeholder="+213XXXXXXXXXX" required=""></p>
						

					</div>
	<div class="btnvalider"> 
						<br>
						 <input type="submit" name="soumettre" value="Proceder à l'achat ">
					</div>
				</form>
</body>
</html>