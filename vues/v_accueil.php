<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a class="navbar_element" href="index.php?uc=accueil">Accueil</a>
            <a class="navbar_element" href="index.php?uc=afficherLecon">Leçons</a>
            <a class="navbar_element" href="index.php?uc=afficherVoiture">Voitures</a>
            <a class="navbar_element" href="index.php?uc=afficherMoniteur">Moniteurs</a>
            <a class="navbar_element" href="index.php?uc=afficherClient">Clients</a>
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
            <script src="./js/accueil.js"></script>
        </form>

        <?php
            $nbLecons = count($lesLecons);
            if ($nbLecons == 0)
            {
                echo "<h3>Aucune lecon de prévue pour " . $nomClient . "</h3>";
            }
            else
            {
                if ($nbLecons > 1) echo "<h3>" . $nbLecons . " lecons de prévues pour " . $nomClient . "</h3>";
                else echo "<h3>" . $nbLecons . " lecon de prévue pour " . $nomClient . "</h3>";
        ?>
        
            <table border=3 cellspacing=1 class="tiles">
                <tr>
                    <th>Date :</th>
                    <th>Heure :</th>
                    <th>Moniteur :</th>
                    <th>Modèle de voiture :</th>
                    <th>Immatriculation :</th>
                </tr> 

                <?php
                    for($i = 0; $i < count($lesLecons); $i++)
                    {
                        $lecon = $lesLecons[$i];

                        $num = $lecon['id_lecon'];
                        $nomMoniteur = $lecon['nomMoniteur'];
                        $prenomMoniteur = $lecon['prenomMoniteur'];

                        $dateTime = new DateTime($lecon["date_lecon"]);
                        $date = $dateTime->format("d/m/Y");
                        $heure = $dateTime->format("H:i");

                        $modele = $lecon["nomModele"];
                        $immatriculation = $lecon["immatriculation"];
                        ?>
                        <tr class="tile">
                            <td width=200><?php echo $date ?></td>
                            <td width=200><?php echo $heure ?></td>
                            <td width=200><?php echo $prenomMoniteur . " " . $nomMoniteur ?></td>
                            <td width=200><?php echo $modele ?></td>
                            <td width=200><?php echo $immatriculation ?></td>

                        </tr>
                        <?php 
                    }
                ?>
            </table>
        <?php
            }
        ?>
    </main>

</body>
</html>