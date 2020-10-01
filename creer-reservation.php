<!DOCTYPE html>
<html>
<head>
	<title>Creer une reservation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form action="creer-reser-redir.php" method="post">
		<fieldset> 
			<legend>Créer une nouvelle  reservation:</legend>
		

		<div class="">
					<p><label for="numreserv"> Numero de reservation:   </label> <input type="text" name="numreserv"  id="num"  required> </p> 

				<p><label for="date-depart"> nombre de place:   </label> <input type=number name="place"  min="1"   required> </p>

				<p><label for="classe"> classe:   </label> <select name="classe"><option>Economique</option><option>Business</option></select> </p>
				<p><label for="heure-depart"> etat:   </label> <select name="etat"><option>CONFIRMED</option><option>NOT CONFIRMED</option></select>  </p>
				
			

		</div>

		<input type="submit" value="Creer ">
		<button><a href="admin.php">Annuler</a> </button>  
		</fieldset>




	</form>

	</div>

</body>
</html>