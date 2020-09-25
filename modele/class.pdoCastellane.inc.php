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
		private static $monPdoCastellane = null;
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
	public  static function getPdoCastellane()
	{
		if(PdoCastellane::$monPdoCastellane == null)
		{
			PdoCastellane::$monPdoCastellane = new PdoCastellane();
		}
		return PdoCastellane::$monPdoCastellane;  
	}
/**
 * Retourne tous les clients sous forme d'un tableau associatif
 *
 * @return le tableau associatif des clients
*/
	public function getLesClients()
	{
		$req = "SELECT * from client ORDER BY nom";
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
	
	/* Création*/
	public function creerClient($nom, $prenom, $date, $telepone, $paiement)
	{
		$res = PdoCastellane::$monPdo->prepare('INSERT INTO client (nom, prenom, date_de_naissance, telephone, date_du_code, date_permis, id_paiement) VALUES (:nom, :prenom, :datenaissance, :telephone, NULL, NULL, :paiement)');
		$res->bindvalue('nom', $nom, PDO::PARAM_STR);
		$res->bindvalue('prenom', $prenom, PDO::PARAM_STR);
		$res->bindvalue('datenaissance', $date, PDO::PARAM_STR);
		$res->bindvalue('telepone', $telepone, PDO::PARAM_STR);
		$res->bindValue('idpaiement', $paiement, PDO::PARAM_STR);
		$res->execute();
	}

	/*Modification*/
	public function modifClient($id, $nom, $prenom, $date, $telepone, $datecode, $datepermis, $paiement)
	{
		$res = PdoCastellane::$monPdo->prepare('UPDATE moniteur SET nom = :nom, prenom = :prenom, date_de_naissance = :datenaissance, telephone = :telephone, date_du_code = :datecode, date_permis = :datepermis, id_paiement = :idpaiement where id_client = :id');
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->bindValue('nom', $nom, PDO::PARAM_STR);   
		$res->bindValue('prenom', $prenom, PDO::PARAM_STR);
		$res->bindValue('datenaissance', $date, PDO::PARAM_STR);
		$res->bindvalue('telepone', $telepone, PDO::PARAM_STR);
		$res->bindValue('datecode', $datecode, PDO::PARAM_STR);
		$res->bindValue('datepermis', $datepermis, PDO::PARAM_STR);
		$res->bindValue('idpaiement', $paiement, PDO::PARAM_STR);
		$res->execute();
	}

	/*Suppression*/
	public function suppClient($id)
	{
		$res = PdoCastellane::$monPdo->prepare('DELETE FROM client WHERE id_client = :id');	
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->execute();
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

	/*Gestion Moniteur
	* affichage
	*/
    public function getLesMoniteurs()
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
	
	/* Création*/
	public function creerMoniteur($nom, $prenom, $date)
	{
		$res = PdoCastellane::$monPdo->prepare('INSERT INTO moniteur (nom, prenom, date_d_embauche) VALUES (:nom, :prenom, :dateembauche)');
		$res->bindvalue('nom', $nom, PDO::PARAM_STR);
		$res->bindvalue('prenom', $prenom, PDO::PARAM_STR);
		$res->bindvalue('dateembauche', $date, PDO::PARAM_STR);
		$res->execute();
	}

	/*Modification*/
	public function modifMoniteur($id, $nom, $prenom, $date)
	{
		$res = PdoCastellane::$monPdo->prepare('UPDATE moniteur SET nom = :nom, prenom = :prenom, date_d_embauche = :dateembauche where id_moniteur = :id');
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->bindValue('nom', $nom, PDO::PARAM_STR);   
		$res->bindValue('prenom', $prenom, PDO::PARAM_STR);
		$res->bindValue('dateembauche', $date, PDO::PARAM_STR);
		$res->execute();
	}

	/*Suppression*/
	public function suppMoniteur($id)
	{
		$res = PdoCastellane::$monPdo->prepare('DELETE FROM moniteur WHERE id_moniteur = :id');	
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->execute();
	}

	/*Gestion Voiture
	* Affichage
	*/
    public function getLesVoitures()
    {
        $req = "SELECT * from voiture";
		$res = PdoCastellane::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
    }

    public function getLaVoiture($id)
    {
        $res = PdoCastellane::$monPdo->prepare('SELECT * from voiture INNER JOIN modele on modele.id_modele=voiture.id_modele where immatriculation = :id');
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->execute();
		$laLigne = $res->fetch();
		return $laLigne;
	}
	/*Modele*/
    public function getModeles()
    {
		$req = "SELECT * from modele";
		$res = PdoCastellane::$monPdo->query($req);
		return $res;
	}
	/*Création*/
	public function creerVoiture($id, $km, $date, $modele)
	{
		$res = PdoCastellane::$monPdo->prepare("INSERT INTO voiture (immatriculation, date_d_achat, solde_km_achat, id_modele) VALUES (:id, :dateachat, :km, :modele)");
		$res->bindvalue('id', $id, PDO::PARAM_STR);
		$res->bindvalue('km', $km, PDO::PARAM_STR);
		$res->bindvalue('dateachat', $date, PDO::PARAM_STR);
		$res->bindvalue('modele', $modele, PDO::PARAM_STR);
		$res->execute();
	}

	/*Modification*/
	public function modifVoiture($id, $km, $date, $modele)
	{
		$res = PdoCastellane::$monPdo->prepare('UPDATE voiture SET immatriculation = :id, date_d_achat = :dateachat, solde_km_achat = :km, id_modele = :modele where immatriculation = :id');
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->bindValue('km', $km, PDO::PARAM_STR);   
		$res->bindValue('dateachat', $date, PDO::PARAM_STR);
		$res->bindvalue('modele', $modele, PDO::PARAM_STR);
		$res->execute();
	}

	/*Suppression*/
	public function suppVoiture($id)
	{
		$res = PdoCastellane::$monPdo->prepare('DELETE FROM voiture WHERE immatriculation = :id');	
		$res->bindValue('id',$id, PDO::PARAM_STR);
		$res->execute();
	}	

	public function getLeconsPrevues($id_client)
	{
		$res = PdoCastellane::$monPdo->prepare('SELECT lecon.id_lecon, moniteur.nom as nomMoniteur, moniteur.prenom as prenomMoniteur, lecon.date_lecon, modele.nom as nomModele, voiture.immatriculation
		FROM lecon 
		INNER JOIN moniteur on lecon.id_moniteur = moniteur.id_moniteur
		INNER JOIN voiture on lecon.immatriculation = voiture.immatriculation
		INNER JOIN modele on voiture.id_modele = modele.id_modele
		WHERE lecon.id_client = :id_client AND lecon.date_lecon >= NOW()
		ORDER BY lecon.date_lecon');
		$res->bindvalue('id_client', $id_client, PDO::PARAM_STR);
		$res->execute();
		$lesLignes = $res->fetchAll(PDO::FETCH_NAMED);
		return $lesLignes;
	}
}
?>