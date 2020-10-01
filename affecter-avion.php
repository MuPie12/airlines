<!DOCTYPE html>
<html>
<head>
	<title>Affecter un avion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form method="post" action="affecter-av-redir.php">
		<fieldset> 
			<legend>Affecter un avion a un  vol:</legend>
		

		<div class="">
					<p><label for="numvol"> Numero de vol:   </label> <input type="text" name="numvol"  id="num" placeholder="" required> </p> 
					<p><label for="numvol"> Numero de l'avion:   </label> <input type="text" name="numav"  id="num" placeholder="" required> </p> 

		</div>

		<input type="submit" value="Affecter avion">
		<button><a href="admin.php">Annuler</a> </button>  
		</fieldset>




	</form>

	</div>

</body>
</html>