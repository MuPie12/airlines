<!DOCTYPE html>
<html>
<head>
	<title>Lister Avions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form>
		<fieldset> 
			<legend>Liste des avions :</legend>
		

		<div class="">
					<p><table >
						  <tbody>
											    <tr id="first-tr">
											      <th scope="col">Numero avion</th>
											      <th scope="col">nom avion </th>
											      <th scope="col">capacite</th>
											      
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
								$reponse = $bdd->query('SELECT * FROM avion');

								//on affiche chaque entrée 
								
								while ($donnees = $reponse->fetch())
									{ 
										?>
										    <p>
										  
											    <tr>
											    	<td><?php echo $donnees['numav']; ?></td>
											      <td><?php echo $donnees['noma']; ?></td>
											      <td><?php echo $donnees['capacite']; ?></td>
											    
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
