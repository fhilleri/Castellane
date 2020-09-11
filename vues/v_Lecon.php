<!doctype html>
<html>

<head>
	<title>Liste des lecons</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" />
        
</head>
<body>
    <form action="index.php?uc=creerLecon&action=creationLecon" method="post">
        <p><H1>Liste des lecons</H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <th>Nom :</th><th>Prénom :</th><th>date d'embauche :</th>
            </tr> 
            
        <?php
		
        foreach($lesLecons as $lecons)
        {
            $num = $lecons['id_lecon'];
            $datelecon = $lecons['date_lecon'];
            $nomC = $lecons['client.nom'];
            $nomM = $lecons['moniteur.nom'];
            $immatriculation = $lecons['immatriculation'];
            
            ?>
            <tr>
                <td width=150><?php echo $num ?></a></td>
                <td width=150><?php echo $datelecon ?></td>
                <td width=100><?php echo $nomC?></td>
                <td width=100><?php echo $nomM?></td>
                <td width=100><?php echo $immatriculation?></td>
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

