<!doctype html>
<html>
    <head>
        <title>Creation d'une nouvelle leçon</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="./vues/style.css" type="text/css" />

    </head>
	
	
	<body>
	<p><h1>Nouvelle leçon :</h1></p><BR/>
	<form action="index.php?uc=creerlecon&action=confirmCreatLecon" method="post">
	
		<table>
		<tbody>
		
            <tr><td>Client</td><td>
                <select name="FId_client">
                    <?php
                        foreach ($clients as $client)
                        {
                            $idClient = $client["id_client"];
                            $nom = $client["nom"];
                            $prenom = $client["prenom"];
                            
                            echo ("<option value='$idClient'>$nom $prenom</option>");
                        }
                        ?>
                </select>
            </td></tr>

            <tr><td>Moniteur</td><td>
                <select name="FId_moniteur">
                    <?php
                        foreach ($moniteurs as $moniteur)
                        {
                            $idMoniteur = $moniteur["id_moniteur"];
                            $nom = $moniteur["nom"];
                            $prenom = $moniteur["prenom"];
                            
                            echo ("<option value='$idMoniteur'>$nom $prenom</option>");
                        }
                        ?>
                </select>
            </td></tr>
            
            <tr><td>Voiture</td><td>
                <select name="FId_voiture">
                    <?php
                        foreach ($voitures as $voiture)
                        {
                            $immatriculation = $voiture["immatriculation"];
                            
                            echo ("<option value='$immatriculation'>$immatriculation</option>");
                        }
                        ?>
                </select>
            </td></tr>

			<tr><td>Date de la leçon </td><td><input name="Fdate" type="date" size=50></td></tr>	
			<tr><td>Heure de la leçon </td><td><input name="Fheure" type="time" size=50></td></tr>	
		</tbody>
		</table>
		
                <br/>
		<input class="button" type="submit" value="Valider">
	</form>

	
	</body>
</html>