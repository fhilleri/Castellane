<?php
    $lesClients = $pdo->getLesClients();
    
    if (isset($_REQUEST["FId_client"])) $fId_client = $_REQUEST["FId_client"];
    else $fId_client = $lesClients[0]["id_client"];

    $nomClient;
    foreach($lesClients as $client)
    {
        if ($client["id_client"] == $fId_client) $nomClient = $client["prenom"] . " " . $client["nom"];
    }

    $lesLecons = $pdo->getLeconsPrevues($fId_client);

	include("vues/v_accueil.php");	
?>
