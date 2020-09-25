<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'creationClient':
		{
			include("vues/navbar.php");
			include("vues/Client/v_creationclients.php");
			break;
		}
		case 'confirmCreatClient':
		{
			$nom = $_REQUEST['Cnom'];
			$prenom = $_REQUEST['Cprenom'];
            $originaldate = $_REQUEST['Cdate'];
            $newdate = new DateTime($originaldate);
			$truedate = $newdate->format('Y-m-d');
			$tel = $_REQUEST['Ctel'];
			$paiement = $_REQUEST['Cpaiement'];

			$pdo->creerClient($nom,$prenom,$truedate, $tel, $paiement);
			
			header('Location: index.php');	
			break;
		}
	}
?>