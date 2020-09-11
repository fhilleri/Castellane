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
            <a class="navbar_element" href="index.php?uc=afficherLeçon">Leçons</a>
            <a class="navbar_element" href="index.php?uc=afficherVoiture">Voitures</a>
            <a class="navbar_element" href="index.php?uc=accueil">Accueil</a>
            <a class="navbar_element" href="index.php?uc=afficherMoniteur">Moniteurs</a>
            <a class="navbar_element" href="">Chronologie</a>
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
                        echo ("<option value='$idClient'>$nom $prenom</option>");
                    }
                ?>
            </select>
            
            <input type="submit">
        </form>

        
    </main>

</body>
</html>