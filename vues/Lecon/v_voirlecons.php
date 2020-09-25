<!doctype html>
<html>

<head>
	<title>Liste des leçons</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css">
        
</head>
<body>
    <form action="index.php?uc=creerLecon&action=creationLecon" method="post">
        <p><H1>Liste des leçons</H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <th>date :</th><th>moniteur :</th><th>client :</th><th>voiture :</th>
            </tr> 
            
        <?php
		
        foreach($lesLecons as $lecon)
        {
            $id = $lecon['id_lecon'];
            $datelecon = $lecon['date_lecon'];
            $moniteur = $lecon['id_moniteur'];
            $client = $lecon['id_client'];
            $voiture = $lecon['immatriculation'];
            
            ?>
            <tr>
                <td width=150><?php echo $datelecon ?></a></td>
                <td width=150><?php echo $moniteur ?></td>
                <td width=100><?php echo $client?></td>
                <td width=100><?php echo $voiture?></td>
                <td><a href="index.php?uc=modifierlecon&action=modifLecon&id=<?php echo $id ?>"><img src='./images/pencil.svg'></a></td>
                <td><a href="index.php?uc=supprimerLecon&action=suppressionLecon&id=<?php echo $id ?>"><img src='./images/close.svg'></a></td>
            </tr>
            <?php 
        }
        ?>
        </table>
        </br>

        <input class="button" type="submit" value="créer un nouveau moniteur">
    </form>
</body>
</html>
