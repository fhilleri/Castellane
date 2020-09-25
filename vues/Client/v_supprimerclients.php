<!doctype html>
<html>
    <head>
        <title>Suppression du client n°<?php echo $Client['id_client']?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Suppression du client n°<?php echo $Client['id_client']?> :</h1></p><br/>
    <?php 
		$id = $Client['id_client'];
		$nom = $Client['nom'];
		$prenom = $Client['prenom'];
		$naissance = $Client['date_de_naissance'];
		$tel = $Client['telephone'];
		$code = $Client['date_du_code'];
		$permis = $Client['date_du_permis'];
		$paiement = $Client['id_paiement'];
    ?>
    <form action="index.php?uc=supprimerMoniteur&action=confirmSuppressionMoniteur" method="post">
	
		<table>
		<tbody>
			<input type="hidden" name="id" value= <?php echo $id?>>
			<tr><td>Nom</td><td><input name="Cnom" size=20 value= <?php echo $nom ?> readonly></td></tr>
			<tr><td>Prénom </td><td><input name="Cprenom" size=20 value= <?php echo $prenom ?> readonly></td></tr>	
			<tr><td>Date de naissance </td><td><input name="Cdate" size=50 value= "<?php echo $naissance ?>" readonly></td></tr>	
			<tr><td>Téléphone </td><td><input name="Ctel" size=50 value= "<?php echo $tel ?>" readonly></td></tr>	
			<tr><td>Date du code</td><td><input name="Ccode" size=50 value= "<?php echo $code ?>" readonly></td></tr>	
			<tr><td>Date du permis </td><td><input name="Cpermis" size=50 value= "<?php echo $permis ?>" readonly></td></tr>	
			<tr><td>Méthode de paiement</td><td><input name="Cpaiement" size=50 value= "<?php echo $paiement ?>" readonly></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>