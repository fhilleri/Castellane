<?php

	$lesClients = $pdo->getLesVoitures();
	include("vues/v_afficherVoiture.php");	
?>