<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'creationLecon':
		{
			$clients = $pdo->getLesClients();
			$moniteurs = $pdo->getLesMoniteurs();
			$voitures = $pdo->getLesVoitures();
			include("vues/Lecon/v_creationlecons.php");
			break;
		}
		case 'confirmCreatLecon':
		{
			$client = $_REQUEST['FId_client'];
			$moniteur = $_REQUEST['FId_moniteur'];
			$voiture = $_REQUEST['FId_voiture'];
			
			$date = $_REQUEST['Fdate'];
			$heure = $_REQUEST['Fheure'];
            $newdate = DateTime::createFromFormat("Y-m-d G:i", $date . ' ' . $heure);
			$truedate = $newdate->format('Y-m-d G:i:00');
			

			$pdo->creerLecon($truedate, $moniteur, $client, $voiture);
			
			header('Location: index.php');	
			break;
		}
	}
?>