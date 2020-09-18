<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/css" href="./css/style.css">
    <title>Accueil</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a class="navbar_element" href="index.php?uc=accueil">Accueil</a>
            <a class="navbar_element" href="index.php?uc=afficherLecon">Leçons</a>
            <a class="navbar_element" href="index.php?uc=afficherVoiture">Voitures</a>
            <a class="navbar_element" href="index.php?uc=afficherMoniteur">Moniteurs</a>
        </div>
    </header>

    <main>
        <h1>Leçons prévues</h1>
        
        <form action="">
        
            <select name="FId_client">
                <?php
                    foreach ($lesClients as $client)
                    {
                        $idClient = $client["id_client"];
                        $nom = $client["nom"];
                        $prenom = $client["prenom"];
                        if ($fId_client == $idClient) $selected = " selected ";
                        else $selected = "";

                        echo ("<option $selected value='$idClient'>$nom $prenom</option>");
                    }
                ?>
            </select>
            
            <input type="submit">
        </form>
        
        <table border=3 cellspacing=1 >
            <tr>
                <td>Région :</td>
            </tr> 
        <?php
        
        foreach($lesRegions as $uneRegion)
        {
            $num = $uneRegion['numR'];
            $libelle = $uneRegion['libelleR'];
            ?>
            <tr>
                <td width=200><?php echo $libelle ?></td>

                <td width=30><a href=index.php?uc=modifierRegion&action=modificationRegion&num=<?php echo $num ?>><img src="images/modifier.gif" title="Modif"></a></td>
                <td width=30><a href=index.php?uc=supprimerRegion&action=suppressionRegion&num=<?php echo $num ?>><img src="images/supp.png" title="Suppr"></a></td>
            </tr>
            <?php 
        }
        ?>
        </table>
        
    </main>

</body>
</html>