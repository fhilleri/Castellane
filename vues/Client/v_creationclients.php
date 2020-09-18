<!doctype html>
<html>
    <head>
        <title>Creation d'un nouveau client</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Nouveau client :</h1></p><BR/>
	<form action="index.php?uc=creerClient&action=confirmCreatClient" method="post">
	
		<table>
		<tbody>
			<tr><td>Nom</td><td><input name="Cnom" size=20></td></tr>
			<tr><td>Prenom </td><td><input name="Cprenom" size=20></td></tr>
			<tr><td>adresse</td><td><input name="Cadresse" size=20></td></tr>	
			<tr><td>date de naissance </td><td><input name="Cdatenaiss" type="date" size=50></td></tr>
			<tr><td>telephone</td><td><input name="Ctel" size=20></td></tr>
			<tr><td>date du code</td><td><input name="Cdatecode" type="date" size=50></td></tr>
			<tr><td>date du permis</td><td><input name="Cpermis" type="date" size=50></td></tr>
			<tr><td>id paiement</td><td><input name="Cidpa" size=20></td></tr>
				
		</tbody>
		</table>

		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>



	
	</body>
</html>