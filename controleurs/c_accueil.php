<?php
    $lesClients = $pdo->getLesClients();
    
    if (isset($_REQUEST["FId_client"])) $fId_client = $_REQUEST["FId_client"];
    else $fId_client = $lesClients[0]["id_client"];

    $lesLecons = $pdo->getLeconsPrevues($fId_client);

	include("vues/v_accueil.php");	
?>
