<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Billet</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style7.css">
</head>
<body>
	<?php 
		$_SESSION['carte-credit']=$_POST['number'];
		//print_r($_SESSION);
		
		?>
	<div id="contenu">
	<header>
		<img src="images/logo.png" alt="logo" width="30" height="40">
		<span class="num-reserv">numero de reservation:<b style="color:red"> <?php echo $_SESSION['num-reserv']?></b>
			
	    </span>
	</header>
	<section>

		<div>
			
		<h1> <span>Votre Reçu e-Ticket et itinéraire</span></h1>
			
			<br>
			<br>
			
		</div>

		<div>
			<?php
				$place=$_SESSION['nbplace'] + $_SESSION['nbplace1'];
			 for ($i=0; $i <$place ; $i++) { ?>

			<h3 > Passager <?php echo $i+1 ;?> </h3>
			<p> <label>  Nom du passager: <?php echo $_SESSION['civilite'][$i],' '.  $_SESSION['nom'][$i],' '.$_SESSION['prenom'][$i];?></label></p>
			<p> <label>  identification : <span> PP <?php echo $_SESSION['num-passport'][$i]?></label></p>
				<?php }?>
			<p> <label>  Numero e-Ticket: <b style="color: red"><?php echo $_SESSION['num-reserv']?></b></label></p>
			
		</div>
		<hr>
		<div>
			<h3>Detais du vol</h3>
			<table   cellspacing="2" cellpadding="2" align="center" >
						 	 	
						  <tbody>
						    <tr>
						      <th scope="col">vol </th>
						      <th scope="col">depart</th>
						      <th scope="col">arrivee	 </th>
						      <th scope="col">classe </th>
						     
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
			$reponse = $bdd->query('SELECT * FROM vol WHERE numvol ="'. $_SESSION['choix'].'"');

			//on affiche chaque entrée 
			$i=0;
			while ($donnees = $reponse->fetch())
				{ 
					?>
					    
					  
						    <tr  class="result" align="center">
						    	<td><?php echo $donnees['numvol']; ?></td>
						      	<td><?php echo $_SESSION['ville-depart']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $donnees['heuredepart'];?> <br> <?php echo $donnees['datedepart'];?> </td>
						      
						      	<td> <?php echo $_SESSION['ville-arrivee'];?> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['heurearrivee']; ?> <br> <?php echo $donnees['datearrivee'];?></td>
						      	<td><?php echo $_SESSION['classe']; ?> / <b>CONFIRMED</b> </td>
						      
						     
						    </tr>
						    
					<?php
					}
						    
						$reponse->closeCursor(); // Termine le traitement de la requête
					?>
			
						     
						</tbody>
					</table>
		</div>
		<hr>
		<div class="tarif">
			<br>
			<p>frais total: <sup>DZD</sup> <b style="color: red ;"> <?php 
							  try{
								$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
								}
								catch(Exception $e) {
									die('Erreur: '. $e->getMessage());
								}

								//requete 
								$reponse= $bdd->query('SELECT prix  FROM vol where numvol="'. $_SESSION['choix'].'"');
								

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

								?>
			</b>
		</p>
			<br>
			<br>
		</div>
		<div class="infos">
			<p>Ticket is non endorsable, non refundable changes allowed , subject  to availability no later than 2 hours before departure.
				Please read carefully all fare restrictions.
			Bon Voyage.</p><br><br>
		</div>
		<div class="carte-credit">
			<p>payé par carte de credit:
				<?php
					
						$cc=$_SESSION['carte-credit'];
						
						$trans=(string) $cc;
						$cm='XXXX-XXXX-XXXX-';
		
						$ss=explode(' ', $trans);
						$cm=$cm.$ss[3];
						echo $cm;

					
				?>

				<!--==============================================================================================================================================================================
					INSCRIPTIONS DES INFORMATIONS RECUEILLIS JUSQU'A PRESENT DANS LA BASE DE DONNEES
				=========================================================================================
				========================================================================================= -->
				<?php 
					//connexion a la BD
					try{
						$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
						$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					}
					catch(Exception $e) {
						die('Erreur: '. $e->getMessage());
					}
					//insertion des differentes valeurs recueillies tout au long de la reseervation dans la BD

					//ville depart et arrivée

					$recup=$_SESSION['ville-depart'];
					list($ville,$code)= explode("(", $recup);
					list($id,$superflue)=explode(")", $code);
					$req=$bdd->prepare('INSERT into ville(idville,nomville) VALUES ("'.$id.'","'.$ville.'") ');
					$req->execute();

					$req=$bdd->prepare(' INSERT into aeroport(idairport,nomairport) VALUES ("'.$id.'","'.$ville.'") ');
					$req->execute();

					$req=$bdd->prepare('INSERT into depart(numvol,idairport) VALUES ('.$_SESSION['choix'].',"'.$id.'") ');
					$req->execute();





					$sql1="')";
					$sql2="')";
					$sql3=")";

					//ville arrivee
					$recup=$_SESSION['ville-arrivee'];
					list($ville,$code)= explode("(", $recup);
					list($id,$superflue)=explode(")", $code);

					

					

					$req=$bdd->prepare('INSERT into ville (idville,nomville) VALUES (:id, :ville) ');
					$req->bindParam(':id',$id);
					$req->bindParam(':ville',$ville);
					$req->execute();
					//$req->execute();

					$sql4=")";
					//aeroport
					$req=$bdd->prepare('INSERT into aeroport(idairport,nomairport) VALUES ("'.$id.'","'.$ville.'") ');
					$req->execute();
					$sql5=")";
					//arrivee
					$req=$bdd->prepare('INSERT into arrivee(numvol,idairport) VALUES ('.$_SESSION['choix'].',"'.$id.'")');
					$req->execute();
					$sql6=")";

					// reservation
					 $place=$_SESSION['nbplace'] + $_SESSION['nbplace1'];
					 $req=$bdd->prepare('INSERT INTO reservation (numreserv,nbplace,classe) VALUES ("'.$_SESSION['num-reserv'].'",'.$place.',"'.$_SESSION['classe'].'")  ');
					$req->execute();
					$sql7=") ";

					//utilisateur
					
					for ($i=0; $i <$place ; $i++) 
						{ 
							# code...
						
						$req=$bdd->prepare('INSERT INTO utilisateur (numpassport,nom,prenom,civilite,email,tel) VALUES ("'.$_SESSION['num-passport'][$i].'", "'.$_SESSION['nom'][$i].'","'.$_SESSION['prenom'][$i].'","'.$_SESSION['civilite'][$i].'","'.$_SESSION['email'].'","'.$_SESSION['telephone'].'") ');
						$req->execute();



						$req=$bdd->prepare('INSERT INTO siege(numsiege,rangee) VALUES ('.$_SESSION['siege'][$i].',"'.$_SESSION['rangee'][$i]. '") ');
						$req->execute();

						/*$sqli="INSERT INTO utilisateur(numpassport,nom,prenom,civilite,email,telephone) VALUES ('".$_SESSION['num-passport'][$i]."', '".$_SESSION['nom'][$i]."','".$_SESSION['prenom'][$i]."','".$_SESSION['civilite'][$i]."','".$_SESSION['email']."','".$_SESSION['telephone']."') "; */
						//$sql8="INSERT INTO siege VALUES ('".$_SESSION['siege'][$i]."','".$_SESSION['rangee'][$i]."') ";

						//association choisir_siege
						$req=$bdd->prepare('SELECT id FROM utilisateur WHERE numpassport="'.$_SESSION['num-passport'][$i].'"');
						$req->execute();
						$id=$req->fetchcolumn();
						


						$req=$bdd->prepare(' INSERT INTO choisir_siege(iduser,numreserv,numsiege) VALUES ('.$id.','.$_SESSION['num-reserv'][$i].','.$_SESSION['siege'][$i].') ');
						$req->execute();
						

						}

						//siege
						



$bdd=null;

				?>


				<!--==================================================================================
					APRES INSCRIPTIONS DANS LA BD, SUPPRESSION ET DESTRUCTION  DES SESSIONS 
			 	====================================================================================== -->
			 	
			 </p>
			<br><br>
		</div>

		<a href="#" onclick="imprimer_page()" value="Exporter en PDF">Imprimer la page</a>

		<script type="text/javascript">
            function imprimer_page(){
            window.print();
             }</script>
	</section>
</div>
</body>
</html> 
