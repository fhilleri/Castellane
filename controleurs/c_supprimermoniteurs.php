<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'suppressionMoniteur':
		{	
			$id = $_REQUEST['id'];
			$moniteur = $pdo->getLeMoniteur($id);
			include("vues/v_supprimermoniteurs.php");
			break;
		}
		case 'confirmSuppressionMoniteur':
		{
			$id = $_REQUEST['id'];
			
			$pdo->suppMoniteur($id);
			
			header('Location: index.php');	
			break;
		}
	}
?>