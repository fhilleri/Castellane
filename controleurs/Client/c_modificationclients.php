<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'modifClient':
		{	
			$id = $_REQUEST['id'];
			$Client = $pdo->getLeClient($id);
			$paiements = $pdo->getpaiement();
			include("vues/Client/v_modificationclients.php");
			break;
		}
		case 'confirmModifClient':
		{
			$id = $_REQUEST['id'];
			$nom = $_REQUEST['Cnom'];
			$prenom = $_REQUEST['Cprenom'];

            $originaldate = $_REQUEST['Cdate'];
            $newdate = new DateTime($originaldate);
			$truedate = $newdate->format('Y-m-d');
			
			$originalcode = $_REQUEST['Ccode'];
            $newcode = new DateTime($originalcode);
			$truecode = $newcode->format('Y-m-d');
			
			$originalpermis = $_REQUEST['Cpermis'];
            $newpermis = new DateTime($originalpermis);
			$truepermis = $newpermis->format('Y-m-d');
			
			$tel = $_REQUEST['Ctel'];
			$paiement = $_REQUEST['Cpaiement'];
            
			$pdo->modifClient($id,$nom,$prenom,$truedate, $tel, $truecode, $truepermis, $paiement);
			
			header('Location: index.php');	
			break;
		}
	}
?>