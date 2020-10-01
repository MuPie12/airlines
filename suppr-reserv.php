<!DOCTYPE html>
<html>
<head>
	<title>Supprimer reservation</title>
	<link rel="stylesheet" type="text/css" href="css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form action="suppr-red.php" method="post">
		<fieldset> 
			<legend>Supprimer une reservation:</legend>
		

		<div class="">
					<p><label for="numreserv"> Numero de reservation:   </label> <input type="text" name="numreserv"  id="num"  required> </p> 

			

		</div>

		<input type="submit" value="Confirmer">
		<button><a href="admin.php">Annuler</a> </button>  
		</fieldset>




	</form>

	</div>

</body>
</html>