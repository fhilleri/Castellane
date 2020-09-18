<!doctype html>
<html>

<head>
	<title>Liste des clients</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css">
        
</head>
<body>
    <form action="index.php?uc=creerClient&action=creationclient" method="post">
        <p><H1>Liste des clients</H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <th>Nom :</th><th>Prénom :</th><th>adresse :</th><th>date de naissances :</th><th>telephone :</th><th>date du code :</th><th>date du permis :</th>
            </tr> 
            
        <?php
		
        foreach($lesClients as $unClient)
        {
			$id = $unClient['id_client'];
            $nom = $unClient['nom'];
			$prenom = $unClient['prenom'];
			$adresse = $unClient['adresse'];
			$telephone = $unClient['telephone'];
			$naissance = $unClient['date_de_naissance'];
			$code = $unClient['date_du_code'];
            $premis = $unClient['date_du_permis'];
            ?>
            <tr>
                <td width=150><?php echo $nom ?></a></td>
                <td width=150><?php echo $prenom ?></td>
                <td width=100><?php echo $adresse?></td>
				<td width=100><?php echo $naissance?></td>
				<td width=100><?php echo $telephone?></td>
				<td width=100><?php echo $code?></td>
				<td width=100><?php echo $premis?></td>
                <td><a href="index.php?uc=modifierClient&action=modifClient&id=<?php echo $id ?>"><img src='./images/pencil.svg'></a></td>
                <td><a href="index.php?uc=&action=&id=<?php echo $id ?>"><img src='./images/close.svg'></a></td>
            </tr>
            <?php 
        }
        ?>
        </table>
        </br>

        <input class="button" type="submit" value="creer un client">
    </form>
</body>
</html>
