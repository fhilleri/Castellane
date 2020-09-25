<!doctype html>
<html>

<head>
	<title>Liste des leçons</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css">
        
</head>
<body>
    <form action="index.php?uc=creerlecon&action=creationLecon" method="post">
        <p><H1>Liste des leçons</H1><br>

        <table border=3 cellspacing=1 >
            <tr>

            <th>Client :</th>
            <th>Moniteur :</th>
            <th>Date de la leçon :</th>
            <th>Immatriculation :</th>

            </tr> 
            
        <?php
		
        foreach($lesLecons as $lecon)
        {

            //SELECT lecon.id_lecon, lecon.date_lecon, lecon.immatriculation, lecon.id_moniteur, moniteur.nom as nomMoniteur, 
            //moniteur.prenom as prenomMoniteur, lecon.id_client, client.nom as nomClient, client.prenom as prenomClient
                       
            $id = $lecon['id_lecon'];
            $date = $lecon['date_lecon'];
            $immatriculation = $lecon['immatriculation'];
            $nomMoniteur = $lecon['prenomMoniteur'] . " " . $lecon['nomMoniteur'];
            $nomClient = $lecon['prenomClient'] . " " . $lecon['nomClient'];
            
            ?>
            <tr>
                <td width=150><?php echo $nomClient ?></a></td>
                <td width=150><?php echo $nomMoniteur ?></td>
                <td width=100><?php echo $date?></td>
                <td width=100><?php echo $immatriculation?></td>
                <td><a href="index.php?uc=modifierMoniteur&action=modifMoniteur&id=<?php echo $id ?>"><img src='./images/pencil.svg'></a></td>
                <td><a href="index.php?uc=supprimerMoniteur&action=suppressionMoniteur&id=<?php echo $id ?>"><img src='./images/close.svg'></a></td>
            </tr>
            <?php 
        }
        ?>
        </table>
        </br>

        <input class="button" type="submit" value="créer une nouvelle leçon">
    </form>
</body>
</html>
