<!doctype html>
<html>
    <head>
        <title>Modification du client n°<?php echo $_REQUEST['num']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Modification du client n°<?php echo $id?> :</h1></p><br/>
    <?php 
		   $id = $unClient['id_client'];
		   $nom = $unClient['nom'];
		   $prenom = $unClient['prenom'];
		   $adresse = $unClient['adresse'];
		   $telephone = $unClient['telephone'];
		   $naissance = $unClient['date_de_naissance'];
		   $code = $unClient['date_du_code'];
		   $premis = $unClient['date_du_permis'];
		   $paie = $unClient['id_paiement'];
    ?>
    <form action="index.php?uc=modifierClient&action=confirmModifClient" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="CMid" value= <?php echo $id?>>
			<tr><th>Nom</th><td><input name="CMnom" size=20 value= <?php echo $nom ?>></td></tr>
			<tr><th>Prenom </th><td><input name="CMprenom" size=20 value= <?php echo $prenom ?>></td></tr>	
			<tr><th>adresse </th><td><input name="CMadresse" size=50 value= <?php echo $adresse ?>></td></tr>	
			<tr><th>telephone </th><td><input name="CMtel" size=20 value= <?php echo $telephone ?>></td></tr>
			<tr><th>date naissance </th><td><input type="date" name="CMnaiss" size=50 value= <?php echo $naissance ?>></td></tr>
			<tr><th>date code </th><td><input type="date" name="CMcode" size=50 value= <?php echo $code ?>></td></tr>
			<tr><th>date permis </th><td><input type="date" name="CMpermis" size=50 value= <?php echo $premis ?>></td></tr>
			<tr><th>idpaiement </th><td><input name="CMidpa" size=50 value= <?php echo $paie ?>></td></tr>
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>