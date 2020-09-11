<!doctype html>
<html>

<head>
	<title>Liste CLIENTS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./vues/style.css" type="text/css" />
        
</head>
<body>
    <form action="index.php?uc=creerMoniteur&action=creationMoniteur" method="post">
        <p><H1>Liste des clients</H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <th>Nom :</th><th>Prénom :</th>
            <th>Adresse:</th><th>Code postal:</th>
            <th>Ville :</th>
            </tr> 
            
        <?php
		
        foreach($lesMoniteurs as $Moniteur)
        {
            $num = $Moniteur['id_moniteur'];
            $nom = $Moniteur['nom'];
            $prenom = $Moniteur['prenom'];
            $embauche = $Moniteur['date_d_embauche'];
            



            ?>
            <tr>
                <td width=150><?php echo $nom ?></a></td>
                <td width=150><?php echo $prenom ?></td>
                <td width=300><?php echo $adresse ?></td>
                <td width=100><?php echo $embauche?></td>
                

				<td width=30><a href=index.php?uc=modifierClient&action=modifClient&num=<?php echo $num ?>> <img src="images/modifier.gif" title="Modif"></a></td>
                <td width=30><a href=index.php?uc=supprimerClient&action=suppressionClient&num=<?php echo $num ?>><img src="images/supp.png" title="Suppr"></a></td>
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
