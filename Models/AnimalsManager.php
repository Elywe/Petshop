<?php 
include_once("Animal.php");

/**
 * Une classe permettant de modifier un animal à travers différentes requêtes SQL
 */
class AnimalsManager{
	//Contient le PDO
	private $db;

	/**
	 * Constructeur
	 * Permet d'initialiser le PDO
	 */
	function __construct(){
		$this->db = new PDO('mysql:host=localhost;dbname=tp_iut', 'root', '');
	}

	/**
	* Permet d'ajouter un animal à la base de données en précisant ses 5 caractéristiques
	* @param l'animal
	*/
	public function add($animal)
	{
		//La requête d'ajout
		$query = $this->db->prepare('INSERT INTO animaux (nom, espece, cri, proprietaire, age)
									values (:nom, :espece, :cri, :proprietaire, :age)');
		//On indique ce que signifie les valeurs :nom, :espece ...
		$query->bindValue(':nom',$animal->getNom());
		$query->bindValue(':espece',$animal->getEspece());
		$query->bindValue(':cri',$animal->getCri());
		$query->bindValue(':proprietaire',$animal->getProprietaire());
		$query->bindValue(':age',$animal->getAge(), PDO::PARAM_INT);
		$query->execute();
	}

	/**
	* Permet de supprimer un animal de la base de données grâce à son identifiant
	* @param l'animal
	*/
	public function remove($animal)
	{
		//La requête de suppression
		$query = $this->db->prepare('DELETE FROM animaux WHERE identifiant=:id');
		$query->bindValue(':id',$animal->getIdentifiant());
		$query->execute();

	}

	/**
	* Permet d'obtenir un animal dans la base de données en fonction de son identifiant
	* @param l'identifiant de l'animal
	* @return l'animal ayant cet id
	*/
	public function get($id)
	{
		//La requête qui get l'animal en fonction de son id
		$query = $this->db->prepare('SELECT * FROM animaux WHERE identifiant=:id');
		$query->bindValue(':id',$id);
		$query->execute();
		$donnees = $query->fetch(PDO::FETCH_ASSOC);
		return new Animal($donnees);
	}

	/**
	* Permet d'obtenir la liste des animaux composant la base de données
	* @return la liste 
	*/
	public function getList()
	{
		$liste = array();
		//La requête qui sélectionne tous les animaux
		$query = $this->db->query('SELECT * FROM animaux');
		//On ajoute à la liste
		while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
			$liste[] = new Animal($donnees);
		}
		return $liste;
	}

	/**
	* Permet de modifier un animal à la base de données 
	* @param l'animal 
	*/
	public function update($animal)
	{
		//La requête de modification
		$query = $this->db->prepare('UPDATE animaux 
			SET nom=:nom, espece=:espece, cri=:cri, proprietaire=:proprietaire, age=:age
			WHERE identifiant=:id');
		$query->bindValue(':id',$animal->getIdentifiant());
		$query->bindValue(':espece',$animal->getEspece());
		$query->bindValue(':cri',$animal->getCri());
		$query->bindValue(':proprietaire',$animal->getProprietaire());
		$query->bindValue(':age',$animal->getAge());
		$query->bindValue(':nom',$animal->getNom());
		$query->execute();
	}
}

