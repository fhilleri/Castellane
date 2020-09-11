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
		$req = "SELECT * from client ORDER BY nomC";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }

    public function getLeClient($id)
    {
        $res = PdoCastellane::$monPdo->prepare('SELECT * from client where id_client = :id');
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
    }
    
    /*Affichage Leçon*/ 
    public function getLesLecons()
    {
        $req = "SELECT * from lecon";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }
    
    public function getLaLecon($id)
    {
        $res = PdoCastellane::$monPdo->prepare('SELECT * from lecon where id_lecon = :id');
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
    }

    /*Affichage Moniteur*/ 
    public function getLesmoniteurs()
    {
        $req = "SELECT * from moniteur";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }

    public function getLeMoniteur($id)
    {
        $res = PdoCastellane::$monPdo->prepare('SELECT * from moniteur where id_moniteur = :id');
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
    }

    /*Affichage Voiture*/ 
    public function getLesVoitures()
    {
        $req = "SELECT * from voiture";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }

    public function getLaVoiture($id)
    {
        $res = PdoCastellane::$monPdo->prepare('SELECT * from voiture where immatriculation = :id');
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
    }

}
?>