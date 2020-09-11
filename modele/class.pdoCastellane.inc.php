<?php
/** 
 * Classe d'accès aux données. 

 * Utilise les services de la classe PDO
 * pour l'application TransNat
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoTransNat qui contiendra l'unique instance de la classe
 *
 */

class PdoCastellane
{   		
		private static $serveur='mysql:host=localhost';
		private static $bdd='dbname=castellane';   		
		private static $user='root';    		
		private static $mdp='';	
		private static $monPdo;
		private static $monPdoTransNat = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
        PdoCastellane::$monPdo = new PDO(PdoCastellane::$serveur.';'.PdoCastellane::$bdd, PdoCastellane::$user, PdoCastellane::$mdp); 
        PdoCastellane::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoCastellane::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 
 * Appel : $instancePdoTransNat = PdoTransNat::getPdoTransNat();
 * @return l'unique objet de la classe PdoTransNat
 */
	public  static function getPdoTransNat()
	{
		if(PdoCastellane::$monPdoTransNat == null)
		{
			PdoCastellane::$monPdoTransNat= new PdoCastellane();
		}
		return PdoCastellane::$monPdoTransNat;  
	}
/**
 * Retourne tous les clients sous forme d'un tableau associatif
 *
 * @return le tableau associatif des clients
*/
	public function getLesClients()
	{
		$req = "SELECT * from client INNER JOIN region on client.numreg = region.numreg ORDER BY nomC";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	/* get un client */

	public function getClient($num)
	{
		$res = PdoCastellane::$monPdo->prepare('SELECT * from client where numC = :num');
		$res->bindvalue('num', $num, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
	}


/**
 * Créer un client 
 *
 * Créer un client à partir des arguments validés passés en paramètre
*/
	public function creerClient($nom,$prenom,$adresse,$codepostal,$ville,$Region)
	{
		$res = PdoCastellane::$monPdo->prepare('INSERT INTO Client (nomC, 
			prenomC, adresseC, codepostalC, villeC, numreg) VALUES( :nom, 
			:prenom, :adresse, :codepostal, :ville, :Region)');
		$res->bindValue('nom',$nom, PDO::PARAM_STR);
		$res->bindValue('prenom', $prenom, PDO::PARAM_STR);   
		$res->bindValue('adresse', $adresse, PDO::PARAM_STR);
		$res->bindValue('codepostal', $codepostal, PDO::PARAM_INT);
		$res->bindValue('ville', $ville, PDO::PARAM_STR);
		$res->bindvalue('Region', $Region, PDO::PARAM_STR);
		$res->execute();
	}

	/* Modif client */
	public function modifClient($num,$nom,$prenom,$adresse,$codepostal,$ville,$Region)
	{
		$res = PdoCastellane::$monPdo->prepare('UPDATE Client SET nomC = :nom, prenomC = :prenom, adresseC = :adresse, codepostalC = :codepostal, villeC = :ville, numreg = :region where numC = :num');
		$res->bindValue('nom',$nom, PDO::PARAM_STR);
		$res->bindValue('prenom', $prenom, PDO::PARAM_STR);   
		$res->bindValue('adresse', $adresse, PDO::PARAM_STR);
		$res->bindValue('codepostal', $codepostal, PDO::PARAM_INT);
		$res->bindValue('ville', $ville, PDO::PARAM_STR);
		$res->bindvalue('region', $Region, PDO::PARAM_STR);
		$res->bindValue('num',$num, PDO::PARAM_STR);
		$res->execute();
	}

	public function suppClient($num)
	{
		$res = PdoCastellane::$monPdo->prepare('DELETE FROM client WHERE numC = :num');	
		$res->bindValue('num',$num, PDO::PARAM_STR);
		$res->execute();
	}

	public function getRegion()
	{
		$req = "SELECT * from region";
		$res = PdoCastellane::$monPdo->query($req);
		return $res;
	}


}
?>