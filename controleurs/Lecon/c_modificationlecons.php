<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'modifVoiture':
		{	
			$immatriculation = $_REQUEST['immatriculation'];
			$Voiture = $pdo->getLaVoiture($immatriculation);
			$reponse = $pdo->getModeles();
			include("vues/Voiture/v_modificationvoitures.php");
			break;
		}
		case 'confirmModifVoiture':
		{
			$immatriculation = $_REQUEST['Vimmatriculation'];
			$Kmachat = $_REQUEST['Vkm'];
            $originaldate = $_REQUEST['Vdate'];
            $newdate = new DateTime($originaldate);
			$truedate = $newdate->format('Y-m-d');
			$modele = $_REQUEST['Vmodele'];

            
			$pdo->modifVoiture($immatriculation,$Kmachat,$truedate,$modele);
			
			header('Location: index.php');	
			break;
		}
	}
?>