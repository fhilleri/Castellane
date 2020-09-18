<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'creationclient':
		{
			include("vues/Client/v_creationclients.php");
			break;
		}
		case 'confirmCreatClient':
		{
			$nom = $_REQUEST['Cnom'];
            $prenom = $_REQUEST['Cprenom'];
			$adressse = $_REQUEST['Cadressse'];
			$datenaiss = $_REQUEST['Cdatenaiss'];
			$tel = $_REQUEST['Ctel'];
			$datecode = $_REQUEST['Cdatecode'];
			$datepermis = $_REQUEST['Cpermis'];
			$idpa = $_REQUEST['Cidpa'];

			$pdo->creerClient( $nom, $prenom, $adressse, $datenaiss, $tel, $datecode, $datepermis, $idpa);
			
			header('Location: index.php');	
			break;
		}
	}
?>