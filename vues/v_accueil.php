<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
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
                <td>Date :</td>
                <td>Heure :</td>
                <td>Moniteur :</td>
            </tr> 
            <?php
    
                foreach($lesLecons as $lecon)
                {
                    var_dump($lecon);
                    $num = $lecon['id_lecon'];
                    $nomMoniteur = $lecon['nom'];
                    $prenomMoniteur = $lecon['prenom'];
                    $dateTime = new DateTime($lecon["date_lecon"]);
                    $date = $dateTime->format("d/m/Y");
                    $heure = $dateTime->format("H:i");
                    ?>
                    <tr>
                        <td width=200><?php echo $date ?></td>
                        <td width=200><?php echo $heure ?></td>
                        <td width=200><?php echo $prenomMoniteur . " " . $nomMoniteur ?></td>

                    </tr>
                    <?php 
                }
            ?>
        </table>
        
    </main>

</body>
</html>