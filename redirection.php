<?php
	session_start();
	
		//generer le numero de reservation
		$characts = '123456789'; $code_aleatoire = ''; 
				for($i=0;$i < 10;$i++) { 
					$code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
				}
		 		$_SESSION['num-reserv']= $code_aleatoire; 
		//redirection vers la page 
		$reponse=$_POST['method-pay'];

		if($reponse=="carte-credit") {
			header('Location:payment.php');
		}
		else {
			header('Location:reservation.php');
} 