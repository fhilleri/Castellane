<!doctype html>
<html>
    <head>
        <title>Creation d'un nouveau client</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Nouveau client :</h1></p><BR/>
	<form action="index.php?uc=creerClient&action=confirmCreatClient" method="post">
	
		<table>
		<tbody>
			<tr><td>Nom</td><td><input name="Cnom" size=20></td></tr>
			<tr><td>Prénom </td><td><input name="Cprenom" size=20></td></tr>	
			<tr><td>Date de naissance </td><td><input name="Cdate" type="date" size=50></td></tr>	
			<tr><td>Téléphone </td><td><input name="Ctel" size=50></td></tr>	
			<tr><td>Date du code</td><td><input name="Ccode" size=50 type="date"></td></tr>	
			<tr><td>Date du permis </td><td><input name="Cpermis" size=50 type="date"></td></tr>	
			<tr><td>Méthode de paiement</td><td><select name="Cpaiement" size="1" value="">
                                <?php
                                $ligne = $paiement->fetch();
                                    while ($ligne) 
                                        {
                                            if ($ligne["id_paiement"] == 1) {
                                            echo '<OPTION selected value = "' . $ligne["id_paiement"] . '">' . $ligne["libelle"] . '</OPTION>'; 
                                            $ligne = $paiement->fetch();
                                            }
                                            else 
                                            {
                                            echo '<OPTION value = "' . $ligne["id_paiement"] . '">' . $ligne["libelle"] . '</OPTION>';
                                            $ligne = $paiement->fetch();
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