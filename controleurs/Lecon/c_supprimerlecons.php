<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'suppressionLecon':
		{	
			$id = $_REQUEST['id'];
			$Lecon = $pdo->getLaLecon($id);
			include("vues/Lecon/v_supprimerlecons.php");
			break;
		}
		case 'confirmSuppressionLecon':
		{
			$id = $_REQUEST['Lid'];
			
			$pdo->suppLecon($id);
			
			header('Location: index.php');	
			break;
		}
	}
?>