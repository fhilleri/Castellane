<?php
require_once("modele/class.pdoCastellane.inc.php");

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoCastellane::getPdoCastellane();	 
switch($uc)
{
	case 'accueil':
<<<<<<< Updated upstream
		{include("controleurs/c_voirClients.php");break;}
=======
        {include("controleurs/c_accueil.php");break;}
    case 'afficherLeçon' :
        {include("controleurs/c_voirLecon.php");break;}
>>>>>>> Stashed changes
	case 'creerLeçon' :
		{include("controleurs/c_creationClient.php");break;}
	case 'modifierLeçon' :
		{include("controleurs/c_modifierClient.php");break;}
	case 'supprimerLeçon' :
        {include("controleurs/c_supprimerClient.php");break;}
    case 'creerMoniteur' :
        {include("controleurs/c_creationClient.php");break;}
    case 'modifierMoniteur' :
        {include("controleurs/c_modifierClient.php");break;}
    case 'supprimerMoniteur' :
        {include("controleurs/c_supprimerClient.php");break;}
    case 'creerVoiture' :
        {include("controleurs/c_creationClient.php");break;}
    case 'modifierVoiture' :
        {include("controleurs/c_modifierClient.php");break;}
    case 'supprimerVoiture' :
        {include("controleurs/c_supprimerClient.php");break;}
}
?>
