<?php
	
	
		//redirection vers la page 
		
/*if (isset($_POST['username']) && isset($_POST['pass'] ))
    {
	
		$pseudo=$_POST['username'];
		$pseudo= strtolower($pseudo);
		$pass=$_POST['pass'];
		$pass = strtolower($pass);

		if ($pseudo == "admin" && $pass == "admin" ) {
			header('Location:admin.php');
		}
		else if ($pseudo == "manager" && $pass == "manager" ) {
			header('Location:manager.php');

		}
		else {
			header('Location:formlogin.php?erreur=1');
		} 
	}*/		

						try{
								$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
								}
								catch(Exception $e) {
									die('Erreur: '. $e->getMessage());
								}


					$pseudo= $_POST['username'];
					//  Récupération de l'utilisateur et de son pass hashé
					$req = $bdd->prepare('SELECT id, pass FROM membre WHERE pseudo = :pseudo');
					$req->execute(array(
					    'pseudo' => $pseudo));
					$resultat = $req->fetch();

					// Comparaison du pass envoyé via le formulaire avec la base
					$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

					

					if ($_POST['pass'] != $resultat['pass'])
					{
					     header('Location:formlogin.php?erreur=1');

										
										
					}
					else
					{
					    if ($_POST['pass'] == $resultat['pass']) {
					        session_start();
					        $_SESSION['id'] = $resultat['id'];
					        $_SESSION['pseudo'] = $pseudo;

											
										
					        header('Location:admin.php');
					    }
					    else {	
											    
										
									
					        header('Location:formlogin.php?erreur=1');
					    }
					}

