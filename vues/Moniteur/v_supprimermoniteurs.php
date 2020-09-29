<!doctype html>
<html>
    <head>
        <title>Suppression du moniteur n°<?php echo $moniteur['id_moniteur']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="./css/style.css" type="text/css" />

    </head>
	
	
	<body>
        <?php include("vues/navbar.php"); ?>
        <main>
            <p><h1>Suppression du moniteur n°<?php echo $moniteur['id_moniteur']?> :</h1></p>
            <?php 
                $id = $moniteur['id_moniteur'];
                $nom = $moniteur['nom'];
                $prenom = $moniteur['prenom'];
                $date = $moniteur['date_d_embauche'];
            ?>
            <form action="index.php?uc=supprimerMoniteur&action=confirmSuppressionMoniteur" method="post">
            
                <table>
                <tbody>
                    <input type="hidden" name="id" value= <?php echo $id?>>
                    <tr><td>Nom</td><td><input name="Mnom" size=20 value= <?php echo $nom ?> readonly></td></tr>
                    <tr><td>Prenom </td><td><input name="Mprenom" size=20 value= <?php echo $prenom ?> readonly></td></tr>	
                    <tr><td>date d'embauche </td><td><input name="Mdate" size=50 value= "<?php echo $date ?>" readonly></td></tr>	
                </tbody>
                </table>
                
                        
                <input class="button" type="submit" value="Valider">
            </form>
        </main>

	
	</body>
</html>