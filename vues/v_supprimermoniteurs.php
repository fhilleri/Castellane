<!doctype html>
<html>
    <head>
        <title>Suppression du moniteur n°<?php echo $moniteur['id']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Suppression du moniteur n°<?php echo $moniteur['id']?> :</h1></p><br/>
    <?php 
        $id = $moniteur['id'];
        $nom = $moniteur['nom'];
        $prenom = $moniteur['prenom'];
        $date = $moniteur['date_d_embauche'];
    ?>
    <form action="index.php?uc=supprimerClient&action=confirmSuppressionClient" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="id" value= <?php echo $id?>>
			<tr><td>Nom</td><td><input name="Mnom" size=20 value= <?php echo $nom ?> readonly></td></tr>
			<tr><td>Prenom </td><td><input name="Mprenom" size=20 value= <?php echo $prenom ?> readonly></td></tr>	
			<tr><td>date d'embauche </td><td><input name="Mdate" size=50 value= "<?php echo $adresse ?>" readonly></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>