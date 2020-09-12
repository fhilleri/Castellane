<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'modifMoniteur':
		{	
			$id = $_REQUEST['id'];
			$moniteur = $pdo->getLeMoniteur($id);
			include("vues/Moniteur/v_modificationmoniteurs.php");
			break;
		}
		case 'confirmModifMoniteur':
		{
			$id = $_REQUEST['id'];
			$nom = $_REQUEST['Mnom'];
			$prenom = $_REQUEST['Mprenom'];
            $originaldate = $_REQUEST['Mdate'];
            $newdate = new DateTime($originaldate);
            $truedate = $newdate->format('Y-m-d');
            
			$pdo->modifMoniteur($id,$nom,$prenom,$truedate);
			
			header('Location: index.php');	
			break;
		}
	}
?>