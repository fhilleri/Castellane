<!doctype html>
<html>
    <head>
        <title>Modification de la voiture - <?php echo $_REQUEST['immatriculation']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./css/style.css" type="text/css" />

    </head>
	
	
	<body>
        <?php include("vues/navbar.php"); ?>
        <main>
            <p><h1>Modification de la voiture - <?php echo $_REQUEST['immatriculation']?> :</h1></p><br/>
            <?php 
                $nom = $Voiture['immatriculation'];
                $Km_achat = $Voiture['solde_km_achat'];
                $date = $Voiture['date_d_achat'];
                $modele = $Voiture['id_modele'];
            ?>
            <form action="index.php?uc=modifierVoiture&action=confirmModifVoiture" method="post">
            
                <table>
                <tbody>
                <tr><td>immatriculation</td><td><input name="Vimmatriculation" size=20 value= <?php echo $nom ?>></td></tr>
                    <tr><td>Km à l'achat </td><td><input name="Vkm" size=20 value= <?php echo $Km_achat ?>></td></tr>	
                    <tr><td>date d'achat </td><td><input name="Vdate" type="date" size=50 value= <?php echo $date ?>></td></tr>	
                    <tr><th>modele : </th><td><select name="Vmodele" size="1" value="">
                                        <?php
                                        $ligne = $reponse->fetch();
                                            while ($ligne) 
                                                {
                                                    if ($ligne["id_modele"] == $modele) {
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
                                    </select>		
                </tbody>
                </table>
                
                        <br/>
                <input class="button" type="submit" value="Valider">
            </form>
        </main>
	</body>
</html>