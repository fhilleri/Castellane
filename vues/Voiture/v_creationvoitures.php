<!doctype html>
<html>
    <head>
        <title>Creation d'une nouvelle voitures</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Nouvelle voiture :</h1></p><BR/>
	<form action="index.php?uc=creerVoiture&action=confirmCreatVoiture" method="post">
	
		<table>
		<tbody>
			<tr><td>immatriculation</td><td><input name="Vimmatriculation" size=20></td></tr>
			<tr><td>Km à l'achat </td><td><input name="Vkm" size=20></td></tr>	
			<tr><td>date d'achat </td><td><input name="Vdate" type="date" size=50></td></tr>
			<tr><th>modele : </th><td><select name="Vmodele" size="1" value="">
                                <?php
                                $ligne = $reponse->fetch();
                                    while ($ligne) 
                                        {
                                            if ($ligne["id_modele"] == 1) {
                                            echo '<OPTION selected value = "' . $ligne["id_modele"] . '">' . $ligne["nom"] . '</OPTION>'; 
                                            $ligne = $reponse->fetch();
                                            }
                                            else 
                                            {
                                            echo '<OPTION value = "' . $ligne["id_modele"] . '">' . $ligne["nom"] . '</OPTION>';
                                            $ligne = $reponse->fetch();
                                            }
                                        }
                                ?>
                            </select>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>