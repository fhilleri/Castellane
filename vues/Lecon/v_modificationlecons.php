<!doctype html>
<html>
    <head>
        <title>Modification de la lecons n°<?php echo $_REQUEST['num']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Modification de la lecons n°<?php echo $id?> :</h1></p><br/>
    <?php 
		$date = $lecon['date_lecon'];
		$id = $lecon['id_lecon'];
        $moniteur = $lecon['id_moniteur'];
		$client = $lecon['id_client'];
		$voiture = $lecon['immatriculation'];
    ?>
    <form action="index.php?uc=modifierLecon&action=confirmModifLecon" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="Lid" value= <?php echo $id?>>
			<tr><th>date</th><td><input name="Ldate" size=50 type="date" value= <?php echo $date ?>></td></tr>
			<tr><th>moniteur </th><td><input name="Lmoniteur" size=20 value= <?php echo $moniteur ?>></td></tr>
			<tr><th>client </th><td><input name="Lclient" size=20 value= <?php echo $client ?>></td></tr>	
			<tr><th>voiture </th><td><input name="Lvoiture" size=20 value= "<?php echo $voiture ?>"></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>