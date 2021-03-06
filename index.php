<?php
require_once("modele/class.pdoCastellane.inc.php");
date_default_timezone_set("Europe/Paris");

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoCastellane::getPdoCastellane();	 
switch($uc)
{
	case 'accueil':
        {include("controleurs/c_accueil.php");break;}
    case 'afficherLecon' :
        {include("controleurs/Lecon/c_voirlecons.php");break;}
	case 'creerlecon' :
		{include("controleurs/lecon/c_creationlecons.php");break;}
	case 'modifierlecon' :
		{include("controleurs/lecon/c_modificationlecon.php");break;}
	case 'supprimerlecon' :
        {include("controleurs/Lecon/c_supprimerlecons.php");break;}
    case 'afficherMoniteur' : 
        {include("controleurs/Moniteur/c_voirmoniteurs.php");break;}
    case 'creerMoniteur' :
        {include("controleurs/Moniteur/c_creationmoniteurs.php");break;}
    case 'modifierMoniteur' :
        {include("controleurs/Moniteur/c_modificationmoniteurs.php");break;}
    case 'supprimerMoniteur' :
        {include("controleurs/Moniteur/c_supprimermoniteurs.php");break;}
    case 'afficherVoiture' :
        {include("controleurs/Voiture/c_voirvoitures.php");break;}
    case 'creerVoiture' :
        {include("controleurs/Voiture/c_creationvoitures.php");break;}
    case 'modifierVoiture' :
        {include("controleurs/Voiture/c_modificationvoitures.php");break;}
    case 'supprimerVoiture' :
        {include("controleurs/Voiture/c_supprimervoitures.php");break;}
    case 'afficherClient' :
        {include("controleurs/Client/c_voirClients.php");break;}
    case 'creerClient' :
        {include("controleurs/Client/c_creationClients.php");break;}
    case 'modifierClient' :
        {include("controleurs/Client/c_modificationClients.php");break;}
    case 'supprimerClient' :
        {include("controleurs/Client/c_supprimerClients.php");break;}
}
?>
