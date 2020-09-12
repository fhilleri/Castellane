<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'creationMoniteur':
		{
			include("vues/Moniteur/v_creationmoniteurs.php");
			break;
		}
		case 'confirmCreatMoniteur':
		{
			$nom = $_REQUEST['Mnom'];
			$prenom = $_REQUEST['Mprenom'];
            $originaldate = $_REQUEST['Mdate'];
            $newdate = new DateTime($originaldate);
            $truedate = $newdate->format('Y-m-d');

			$pdo->creerMoniteur($nom,$prenom,$truedate);
			
			header('Location: index.php');	
			break;
		}
	}
?>