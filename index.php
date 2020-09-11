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
        {include("controleurs/c_accueil.php");break;}
    case 'afficherLeçon' :
        {include("controleurs/c_voirLeçon.php");break;}
	case 'creerLeçon' :
		{include("controleurs/c_creationLeçon.php");break;}
	case 'modifierLeçon' :
		{include("controleurs/c_modifierLeçon.php");break;}
	case 'supprimerLeçon' :
        {include("controleurs/c_supprimerLeçon.php");break;}
    case 'afficherMoniteur' : 
        {include("controleurs/c_voirMoniteurs.php");break;}
    case 'creerMoniteur' :
        {include("controleurs/c_creationMoniteurs.php");break;}
    case 'modifierMoniteur' :
        {include("controleurs/c_modifierMoniteurs.php");break;}
    case 'supprimerMoniteur' :
        {include("controleurs/c_supprimerMoniteurs.php");break;}
    case 'afficherVoiture' :
        {include("controleurs/c_afficherVoiture.php");break;}
    case 'creerVoiture' :
        {include("controleurs/c_creationVoitures.php");break;}
    case 'modifierVoiture' :
        {include("controleurs/c_modifierVoitures.php");break;}
    case 'supprimerVoiture' :
        {include("controleurs/c_supprimerVoitures.php");break;}
}
?>
