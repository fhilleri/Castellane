<!doctype html>
<html>
    <head>
        <title>Creation d'un nouveau moniteurs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./css/style.css" type="text/css" />

    </head>
	
	
	<body>
		<?php include("vues/navbar.php"); ?>
		<main>
			<p><h1>Nouveau moniteur :</h1></p>
			<form action="index.php?uc=creerMoniteur&action=confirmCreatMoniteur" method="post">
			
				<table>
				<tbody>
					<tr><td>Nom</td><td><input name="Mnom" size=20></td></tr>
					<tr><td>Prenom </td><td><input name="Mprenom" size=20></td></tr>	
					<tr><td>date d'embauche </td><td><input name="Mdate" type="date" size=50></td></tr>	
				</tbody>
				</table>
				
						
				<input class="button" type="submit" value="Valider">
			</form>
		</main>
	</body>
</html>