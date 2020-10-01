<?php

	$nom=$_POST['username'];
	$num =$_POST['num-reserv'];



			try{
				$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
			}
			catch(Exception $e) {
				die('Erreur: '. $e->getMessage());
			}


			//requete 
			$reponse = $bdd->query('SELECT count(*) FROM effectuer WHERE numreser = "'.$num.'"  AND iduser IN (SELECT iduser FROM user WHERE nom="'.$nom.'") ');



			//on affiche chaque entrée 
			
			while ($donnees = $reponse->fetch())
				{

				}
				$count=$donnees['count(*)'];
				if ($count =0) {
					 header('Location: consulter.php?erreur=2');
				}
				else {
					header('Location: billet.php');
				}

