<?php
require_once("modele/class.pdoCastellane.inc.php");

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

//$pdo = PdoCastellane::getPdoCastellane();	 
switch($uc)
{
	case 'accueil':
		{include("controleurs/c_accueil.php");break;}
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
