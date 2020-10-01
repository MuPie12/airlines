<?php
	session_start();
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
	
	<section>
		<div id="wrapper">
			
		
		<div class="infos-reserv">
			<h2>Votre Reservation de voyage</h2>
			<p>
				Numero de Reservation:  <span class="num-reserv>"><?php echo $_SESSION['num-reserv']?></span>
		 	
			</p>
			<p>
				Etat du Voyage: <span class="etat">EN ATTENTE DE CONFIRMATION SOUS UN DELAI DE 48H</span>
			</p>
			<br>
			<ul><li>Nous vous conseillons de noter le numero de réservation ou d'<a href="#" onclick="imprimer_page()" value="Exporter en PDF">imprimer </a>cette page</li></ul>
			
		</div>
		<div class="infos-voyageur">
			<h3>Informations sur le Voyageur</h3>
			<?php $place=$_SESSION['nbplace'] + $_SESSION['nbplace1']; for ($i=0; $i <$place ; $i++) { ?>

			<h3 > Passager <?php echo $i+1 ;?> </h3>
			<p>Nom: <span><?php   echo  $_SESSION['nom'][$i]?></span></p>
			<p>Prenom: <span><?php  echo $_SESSION['prenom'][$i] ?></span> </p>
			<p>Numero Passeport: <span><?php echo $_SESSION['num-passport'][$i] ?></span> </p>
			
			<p>Siege: <span><?php echo $_SESSION['rangee'][$i],$_SESSION['siege'][$i] ?> </span> </p>
			<?php }?>
			<br>
			<hr>
			<p>Email: <span><?php echo $_SESSION['email'] ?></span> </p>
			<p>Telephone: <span><?php echo $_SESSION['telephone'] ?></span> </p>
		</div>
		<div class="impression">
			<p><a href="#" onclick="imprimer_page()" value="Exporter en PDF">Imprimer la page</a></p>
			
		</div>
		 <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>


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





					//ville arrivee
					$recup=$_SESSION['ville-arrivee'];
					list($ville,$code)= explode("(", $recup);
					list($id,$superflue)=explode(")", $code);

					

					

					$req=$bdd->prepare('INSERT into ville (idville,nomville) VALUES (:id, :ville) ');
					$req->bindParam(':id',$id);
					$req->bindParam(':ville',$ville);
					$req->execute();
					//$req->execute();

					
					//aeroport
					$req=$bdd->prepare('INSERT into aeroport(idairport,nomairport) VALUES ("'.$id.'","'.$ville.'") ');
					$req->execute();
					
					//arrivee
					$req=$bdd->prepare('INSERT into arrivee(numvol,idairport) VALUES ('.$_SESSION['choix'].',"'.$id.'")');
					$req->execute();
					

					// reservation
					 $place=$_SESSION['nbplace'] + $_SESSION['nbplace1'];
					 $req=$bdd->prepare('INSERT INTO reservation (numreserv,nbplace,classe,etat_reserv) VALUES ("'.$_SESSION['num-reserv'].'",'.$place.',"'.$_SESSION['classe'].'","NOT CONFIRMED")  ');
					$req->execute();
					

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
						


						$req=$bdd->prepare(' INSERT INTO choisir_siege VALUES ('.$id.','.$_SESSION['num-reserv'][$i].','.$_SESSION['siege'][$i].') ');
						$req->execute();
						$sql9=") ";

						}

						//siege
						



				?>
	</div>
	</section>

</body>
</html>
