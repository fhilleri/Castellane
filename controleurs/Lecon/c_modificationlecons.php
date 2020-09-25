<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'modifLecon':
		{	
			$id = $_REQUEST['id'];
			$lecon = $pdo->getLaLecon($id);
			include("vues/lecon/v_modificationlecons.php");
			break;
		}
		case 'confirmModifLecon':
		{
			$id = $_REQUEST['Lid'];
			$date = $_REQUEST['Ldate'];
        	$moniteur = $_REQUEST['Lmoniteur'];
			$client = $_REQUEST['Lclient'];
			$voiture = $_REQUEST['Lvoiture'];

            
			$pdo->modifLecon($id,$date,$moniteur,$client,$voiture);
			
			header('Location: index.php');	
			break;
		}
	}
?>