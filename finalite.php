<?php
	


		$reponse=$_POST['method-pay'];

		if($reponse=="carte-credit") {
			header('Location:payment.php');
		}
		else {
			header('Location:reservation.php');
} 