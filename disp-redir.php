<!DOCTYPE html>
<html>
<head>
	<title>Succes Validation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style8.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
					try{
						$bdd = new PDO('mysql:host=localhost;dbname=bdpro;charset=utf8','mupie', 'onlab');
						$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					}
					catch(Exception $e) {
						die('Erreur: '. $e->getMessage());
					}

					$req=$bdd->query('SELECT numav FROM avion');
					
					$a= array();
					
						while ($donnees = $req->fetch())
							{ 
								 $a[] = $donnees['numav'];
								echo $donnees['numav'];
								
							}
							print_r($a);

						$bool = FALSE;
								foreach ($a as $key => $value) {
									if(($_POST['numav'] == $value)) {
										$bool=TRUE;
									}
								}
								if($bool)  {
									header('location:disp-true.php');
									
								}
								else
									header('location:disp-false.php');	

							
						//	$req->closeCursor(); // Termine le traitement de la requête

					
								
								?>


</body>
</html>
