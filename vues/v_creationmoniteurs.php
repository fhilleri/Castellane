<!doctype html>
<html>
    <head>
        <title>Creation d'un nouveau moniteurs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Nouveau moniteur :</h1></p><BR/>
	<form action="index.php?uc=creerMoniteur&action=confirmCreatMoniteur" method="post">
	
		<table>
		<tbody>
			<tr><td>Nom</td><td><input name="Mnom" size=20></td></tr>
			<tr><td>Prenom </td><td><input name="Mprenom" size=20></td></tr>	
			<tr><td>date d'embauche </td><td><input name="Mdate" type="date" size=50></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>