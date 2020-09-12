<?php

	$lesVoitures = $pdo->getLesVoitures();
	include("vues/v_afficherVoiture.php");	
?>