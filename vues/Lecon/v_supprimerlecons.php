<!doctype html>
<html>
    <head>
        <title>Suppression de la lecon n°<?php echo $Lecon['id_lecon']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Suppression de la lecon n°<?php echo $Lecon['id_lecon']?> :</h1></p><br/>
    <?php 
		$id = $Lecon['id_lecon'];
		$date_lecon = $Lecon['date_lecon'];
		$id_moniteur = $Lecon['id_moniteur'];
		$id_client = $Lecon['id_client'];
		$immatriculation = $Lecon['immatriculation'];
    ?>
    <form action="index.php?uc=supprimerlecon&action=confirmSuppressionLecon" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="id" value="<?php echo $id?>">
			<tr><td>id lecon</td><td><input name="Lid" size=20 value="<?php echo $id ?>" readonly></td></tr>
			<tr><td>date de la lecon </td><td><input name="Ldate" size=20 value="<?php echo $date_lecon ?>" readonly></td></tr>
			<tr><td>id moniteur</td><td><input name="Lid_moniteur" size=50 value="<?php echo $id_moniteur ?>" readonly></td></tr>
			<tr><td>id client </td><td><input name="Lid_client" size=50 value="<?php echo $id_client ?>" readonly></td></tr>	
			<tr><td>immatriculation</td><td><input name="Limmatriculation" size=50 value="<?php echo $immatriculation ?>" readonly></td></tr>
		</tbody>
		</table>
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>