<!DOCTYPE html>
<html>
<head>
	<title>Creer un vol</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
<div id="contenu">
	

	<form method="post" action="mod-vol-redir.php">
		<fieldset> 
			<legend>Modifier un  vol:</legend>
		

		<div class="">
					<p><label for="numvol"> Numero de vol:   </label> <input type="text" name="numvol"  id="num" placeholder="Entrez le numero de vol" required> </p> 

				<p><label for="date-depart"> date de depart:   </label> <input type="date" name="date-depart"  id="date-depart" placeholder="date en format MM/DD/AAAA" required> </p>

				<p><label for="date-arrivee"> date arrivee:   </label> <input type="date" name="date-arrivee" data-date-format="MM JJ AAAA"  id="date-arrivee" placeholder="date en format Mm/JJ/AAAA" required> </p>
				<p><label for="heure-depart"> heure depart:   </label> <input type="time" name="heure-depart"  id="heure-depart" placeholder="" required> </p>
				<p><label for="heure-arrivee"> heure arrivee:   </label> <input type="time" name="heure-arrivee"  id="heure-arrivee" placeholder="" required> </p>
				<p><label for="vile-depart"> ville depart:   </label> <select name="ville-depart" id="ville-depart" required="">
									<option selected="">Abidjan (ABJ)</option>
									<option >Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select></p>
				<p><label for="ville-arrivee"> ville arrivee:   </label> <select name="ville-arrivee" id="ville-arrivee" required="">
									<option>Abidjan (ABJ)</option>
									<option selected="">Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select> </p>
				<p><label for="prix"> prix:  * </label> <input type="text" name="prix"  id="prix" placeholder="" required> </p>
				<p><label for="numav"> numero d'avion concerné:   </label> <input type="text" name="numav"  id="date-arrivee" placeholder="" required> </p><br>

		</div>

		<input type="submit" value="Modifier Vol">
		<button><a href="admin.php">Annuler</a> </button>  
		</fieldset>




	</form>

	</div>

</body>
</html>