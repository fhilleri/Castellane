<!doctype html>
<html>
    <head>
        <title>Modification du moniteur n°<?php echo $_REQUEST['num']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./css/style.css" type="text/css" />

    </head>
	
	
	<body>
		<?php include("vues/navbar.php"); ?>
		<main>
			<p><h1>Modification du moniteur n°<?php echo $id?> :</h1></p>
			<?php 
				$nom = $moniteur['nom'];
				$prenom = $moniteur['prenom'];
				$date = $moniteur['date_d_embauche'];
			?>
			<form action="index.php?uc=modifierMoniteur&action=confirmModifMoniteur" method="post">
			
				<table>
				<tbody>
					<input type="hidden" name="id" value= <?php echo $id?>>
					<tr><th>Nom</th><td><input name="Mnom" size=20 value= <?php echo $nom ?>></td></tr>
					<tr><th>Prenom </th><td><input name="Mprenom" size=20 value= <?php echo $prenom ?>></td></tr>	
					<tr><th>date d'embauche </th><td><input name="Mdate" size=50 value= "<?php echo $date ?>"></td></tr>	
				</tbody>
				</table>
				
						
				<input class="button" type="submit" value="Valider">
			</form>
		</main>
	</body>
</html>