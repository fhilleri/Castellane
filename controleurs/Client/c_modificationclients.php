<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'modifClient':
		{	
			$id = $_REQUEST['id'];
			$unClient = $pdo->getLeClient($id);

			include("vues/Client/v_modificationclients.php");
			break;
		}
		case 'confirmModifClient':
		{
			$nom = $_REQUEST['CMnom'];
            $prenom = $_REQUEST['CMprenom'];
			$adresse = $_REQUEST['CMadressse'];
			$datenaiss = $_REQUEST['CMdatenaiss'];
			$tel = $_REQUEST['CMtel'];
			$datecode = $_REQUEST['CMdatecode'];
			$datepermis = $_REQUEST['CMpermis'];
			$idpa = $_REQUEST['CMidpa'];

            
			$pdo->modifClient($nom, $prenom, $adresse, $datenaiss, $tel, $datecode, $datepermis, $idpa, $numcli);
			
			header('Location: index.php');	
			break;
		}
	}
?>