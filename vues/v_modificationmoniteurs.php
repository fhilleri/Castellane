<!doctype html>
<html>
    <head>
        <title>Modification du moniteur n°<?php echo $_REQUEST['num']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Modification du moniteur n°<?php echo $id?> :</h1></p><br/>
    <?php 
        $nom = $unClient['nom'];
        $prenom = $unClient['prenom'];
        $date = $unClient['date_d_embauche'];
    ?>
    <form action="index.php?uc=modifierMoniteur&action=confirmModifMoniteur" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="id" value= <?php echo $numcli?>>
			<tr><th>Nom</th><td><input name="Mnom" size=20 value= <?php echo $nom ?>></td></tr>
			<tr><th>Prenom </th><td><input name="Mprenom" size=20 value= <?php echo $prenom ?>></td></tr>	
			<tr><th>date d'embauche </th><td><input name="Mdate" size=50 value= "<?php echo $date ?>"></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>