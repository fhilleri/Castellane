<!doctype html>
<html>
    <head>
        <title>Suppression de la voiture n°<?php echo $Voiture['immatriculation']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="./css/style.css" type="text/css" />

    </head>
	
	
	<body>
        <?php include("vues/navbar.php"); ?>
        <main>
            <p><h1>Suppression de la voiture n°<?php echo $Voiture['immatriculation']?> :</h1></p><br/>
            <?php 
                $nom = $Voiture['immatriculation'];
                $Km_achat = $Voiture['solde_km_achat'];
                $date = $Voiture['date_d_achat'];
            ?>
            <form action="index.php?uc=supprimerVoiture&action=confirmSuppressionVoiture" method="post">
            
                <table>
                <tbody>
                    <tr><td>immatriculation</td><td><input name="Vimmatriculation" size=20 value= <?php echo $nom ?> readonly></td></tr>
                    <tr><td>Km à l'achat </td><td><input name="Vkm" size=20 value= <?php echo $Km_achat ?> readonly></td></tr>	
                    <tr><td>date d'achat </td><td><input name="Vdate" type="date" size=50 value= <?php echo $date ?> readonly></td></tr>	

                </tbody>
                </table>
                
                        <br/>
                <input class="button" type="submit" value="Valider">
            </form>
        </main>
	</body>
</html>