<!doctype html>
<html>
    <head>
        <title>Modification du client n°<?php echo $_REQUEST['num']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Modification du client n°<?php echo $id?> :</h1></p><br/>
    <?php 
        $id = $Client['id_client'];
		$nom = $Client['nom'];
		$prenom = $Client['prenom'];
		$naissance = $Client['date_de_naissance'];
		$tel = $Client['telephone'];
		$code = $Client['date_du_code'];
		$permis = $Client['date_du_permis'];
		$paiement = $Client['id_paiement'];
    ?>
    <form action="index.php?uc=modifierClient&action=confirmModifClient" method="post">
	
		<table>
		<tbody>
		<tr><td>Nom</td><td><input name="Cnom" size=20 value= <?php echo $nom ?> ></td></tr>
			<tr><td>Prénom </td><td><input name="Cprenom" size=20 value= <?php echo $prenom ?> ></td></tr>	
			<tr><td>Date de naissance </td><td><input name="Cdate" size=50 type="date" value= "<?php echo $naissance ?>" ></td></tr>	
			<tr><td>Téléphone </td><td><input name="Ctel" size=50 value= "<?php echo $tel ?>" ></td></tr>	
			<tr><td>Date du code</td><td><input name="Ccode" size=50 type="date" value= "<?php echo $code ?>" ></td></tr>	
			<tr><td>Date du permis </td><td><input name="Cpermis" size=50 type="date" value= "<?php echo $permis ?>" ></td></tr>	
			<tr><td>Méthode de paiement</td><td><select name="Cpaiement" size="1" value="">
                                <?php
                                $ligne = $paiements->fetch();
                                    while ($ligne) 
                                        {
                                            if ($ligne["id_paiement"] == $paiement) {
                                            echo '<OPTION selected value = "' . $ligne["id_paiement"] . '">' . $ligne["libelle"] . '</OPTION>'; 
                                            $ligne = $paiements->fetch();
                                            }
                                            else 
                                            {
                                            echo '<OPTION value = "' . $ligne["id_paiement"] . '">' . $ligne["libelle"] . '</OPTION>';
                                            $ligne = $paiements->fetch();
                                            }
                                        }
                                ?>
                            </select>
                            </td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>