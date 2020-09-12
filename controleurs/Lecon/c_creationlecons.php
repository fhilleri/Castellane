<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'creationVoiture':
		{
			$reponse = $pdo->getModeles();
			include("vues/Voiture/v_creationvoitures.php");
			break;
		}
		case 'confirmCreatVoiture':
		{
			$immatriculation = $_REQUEST['Vimmatriculation'];
			$Kmachat = $_REQUEST['Vkm'];
            $originaldate = $_REQUEST['Vdate'];
            $newdate = new DateTime($originaldate);
			$truedate = $newdate->format('Y-m-d');
			$modele = $_REQUEST['Vmodele'];

			$pdo->creerVoiture($immatriculation,$truedate,$Kmachat,$modele);
			
			header('Location: index.php');	
			break;
		}
	}
?>