<!DOCTYPE html>
<html>
<head>
	<title>Liste Reservation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form>
		<fieldset> 
			<legend>Liste des reservations  :</legend>
		

		<div class="">
					<p><table >
						  <tbody>
											    <tr id="first-tr">
											      <th scope="col">Numero reservation</th>
											      <th scope="col">nbplace </th>
											      <th scope="col">classe</th>
											      <th>etat</th>
											      
											      
											    </tr>
							<?php
							// Sous WAMP (Windows)
								try{
								$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
								}
								catch(Exception $e) {
									die('Erreur: '. $e->getMessage());
								}

								//requete 
								$reponse = $bdd->query('SELECT * FROM reservation');

								//on affiche chaque entrée 
								
								while ($donnees = $reponse->fetch())
									{ 
										?>
										    <p>
										  
											    <tr>
											    	<td><?php echo $donnees['numreserv']; ?></td>
											      <td><?php echo $donnees['nbplace']; ?></td>
											      <td><?php echo $donnees['classe']; ?></td>
											      <td><?php echo $donnees['etat_reserv']; ?></td>
											     

											    
											    </tr>
											    
										<?php
										}
											    
											$reponse->closeCursor(); // Termine le traitement de la requête
										?>

										</table>

										<button><a href="admin.php">Retour</a> </button>  
									
		</div>

		
		</fieldset>




	</form>

	</div>

</body>
</html>
