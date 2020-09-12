<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'suppressionVoiture':
		{	
			$immatriculation = $_REQUEST['immatriculation'];
			$Voiture = $pdo->getLaVoiture($immatriculation);
			include("vues/Voiture/v_supprimervoitures.php");
			break;
		}
		case 'confirmSuppressionVoiture':
		{
			$immatriculation = $_REQUEST['Vimmatriculation'];
			
			$pdo->suppVoiture($immatriculation);
			
			header('Location: index.php');	
			break;
		}
	}
?>