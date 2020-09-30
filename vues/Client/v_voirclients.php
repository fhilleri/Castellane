<!doctype html>
<html>

<head>
	<title>Liste des Clients</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./css/style.css">
</head>


<body>
    <?php include("vues/navbar.php"); ?>
    <main>
        <form action="index.php?uc=creerClient&action=creationClient" method="post">
            <p><H1>Liste des Clients</H1>

            <table border=3 cellspacing=1 class="tiles">
                <tr>
                <th>Nom :</th><th>Prénom :</th><th>date de naissance :</th><th>Téléphone :</th><th>date du code :</th><th>date du permis :</th><th>méthode de paiement :</th><th></th><th></th>
                </tr> 
                
            <?php
            
            foreach($lesClients as $Client)
            {
                $id = $Client['id_client'];
                $nom = $Client['nom'];
                $prenom = $Client['prenom'];
                $naissance = $Client['date_de_naissance'];
                $tel = $Client['telephone'];
                $code = $Client['date_du_code'];
                $permis = $Client['date_du_permis'];
                $paiement = $Client['id_paiement'];
                
                ?>
                <tr class="tile">
                    <td width=150><?php echo $nom ?></a></td>
                    <td width=150><?php echo $prenom ?></td>
                    <td width=100><?php echo $naissance?></td>
                    <td width=100><?php echo $tel?></td>
                    <td width=100><?php echo $code?></td>
                    <td width=100><?php echo $permis?></td>
                    <td width=100><?php echo $paiement?></td>
                    <td><a href="index.php?uc=modifierClient&action=modifClient&id=<?php echo $id ?>"><img src='./images/pencil.svg'></a></td>
                    <td><a href="index.php?uc=supprimerClient&action=suppressionClient&id=<?php echo $id ?>"><img src='./images/close.svg'></a></td>
                </tr>
                <?php 
            }
            ?>
            </table>
            

            <input class="button" type="submit" value="créer un nouveau Client">
        </form>
    </main>
</body>
</html>
