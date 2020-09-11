 
<!doctype html>
<html>

<head>
	<title>Liste CLIENTS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="design.css" />
        
</head>
<body>
    <form action="index.php?uc=creerVoiture&action=creationVoiture" method="post">
        <p><H1>Affichages des voitures</H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <td>Immatriculation :</td>
            <td>Date d'achat :</td>
            <td>Solde de Km à l'achat :</td>
            </tr> 
        <?php
		
        foreach( $lesVoitures as $uneVoiture)
        {
            $id_modele = $uneVoiture['id_modeleC'];
            $immatriculation = $uneVoiture['immatriculationC'];
            $date_d_achat = $uneVoiture['date_d_achatC'];
            $solde_km_achat = $uneVoiture['solde_km_achatC'];
            ?>
            <tr>
                <td width=150><?php echo $immatriculation ?></td>
                <td width=300><?php echo $date_d_achat ?></td>
                <td width=100><?php echo $solde_km_achat ?></td>
            </tr>
            <?php 
        }
        ?>
        </table>
        </br>

        <input type="submit" value="créer une nouvelle voiture">
		</form>
</body>
</html>

