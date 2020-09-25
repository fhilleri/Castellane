<!doctype html>
<html>

<head>
	<title>Liste des Voitures</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css">
        
</head>


<body>
    <?php include("vues/navbar.php"); ?>
    <main>
        <form action="index.php?uc=creerVoiture&action=creationVoiture" method="post">
            <p><H1>Liste des Voitures</H1><br>

            <table border=3 cellspacing=1 >
                <tr>
                <th>Immatriculation :</th><th>Km à l'achat :</th><th>date d'achat :</th>
                </tr> 
                
            <?php
            
            foreach($lesVoitures as $Voiture)
            {
                $nom = $Voiture['immatriculation'];
                $Km_achat = $Voiture['solde_km_achat'];
                $date = $Voiture['date_d_achat'];
                
                ?>
                <tr>
                    <td wnomth=150><?php echo $nom ?></a></td>
                    <td wnomth=150><?php echo $Km_achat ?></td>
                    <td wnomth=100><?php echo $date?></td>
                    <td><a href="index.php?uc=modifierVoiture&action=modifVoiture&immatriculation=<?php echo $nom ?>"><img src='./images/pencil.svg'></a></td>
                    <td><a href="index.php?uc=supprimerVoiture&action=suppressionVoiture&immatriculation=<?php echo $nom ?>"><img src='./images/close.svg'></a></td>
                </tr>
                <?php 
            }
            ?>
            </table>
            </br>

            <input class="button" type="submit" value="créer une nouveau voiture">
        </form>
    </main>
</body>
</html>
