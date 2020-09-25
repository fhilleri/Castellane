<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'suppressionClient':
		{	
			$id = $_REQUEST['id'];
			$Client = $pdo->getLeClient($id);
			include("vues/Client/v_supprimerclients.php");
			break;
		}
		case 'confirmSuppressionClient':
		{
			$id = $_REQUEST['id'];
			
			$pdo->suppClient($id);
			
			header('Location: index.php');	
			break;
		}
	}
?>