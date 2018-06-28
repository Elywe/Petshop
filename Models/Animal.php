<?php 
/**
* Une classe contenant un animal
*/
class Animal
{
	//Contient l'identifiant de l'animal
	private $identifiant;
	//Contient le nom de l'animal
	private $nom;
	//Contient l'espèce de l'animal
	private $espece;
	//Contient le cri de l'animal
	private $cri;
	//Contient le propriétaire de l'animal
	private $proprietaire;
	//Contient l'âge de l'animal
	private $age;

	/**
	* Constructeur 
	* Pour chaque attribut, on l'initialise grâce au tableau argument
	*/
	function __construct($argument)
	{
		//$k correspond aux attributs, et $v à leurs valeurs
		foreach($argument as $k => $v){
			$this->$k = $v;
		}
	}
	
	/**
	 * Permet de modifier un argument passé en paramètre des attributs d'un animal
	 */
	public function hydrate($argument)
	{
		foreach($argument as $k => $v){
			$this->$k = $v;
		}
	}

	/**
	 * Getter d'identifiant
	 * @return l'identifiant de l'animal
	 */
	public function getIdentifiant()
	{
		return $this->identifiant;
	}
	
	/**
	 * Getter de nom
	 * @return le nom de l'animal
	 */
	public function getNom()
	{
		return $this->nom;
	}
	
	/**
	 * Getter d'espèce
	 * @return l'espèce de l'animal
	 */
	public function getEspece()
	{
		return $this->espece;
	}
	
	/**
	 *Getter de cri
	 * @return le cri de l'animal
	 */
	public function getCri()
	{
		return $this->cri;
	}
	
	/**
	 * Getter de propriétaire
	 * @return le propriétaire de l'animal
	 */
	public function getProprietaire()
	{
		return $this->proprietaire;
	}
	
	/**
	 * Getter d'âge
	 * @return l'âge de l'animal
	 */
	public function getAge()
	{
		return $this->age;
	}
	
	/**
	 * Setter d'identifiant
	 * @param l'identifiant de l'animal 
	 */
	public function setIdentifiant($_identifiant)
	{
		$this->identifiant= $_identifiant;
	}
	
	/**
	 * Setter de nom
	 * @param le nom de l'animal 
	 */
	public function setNom($_nom)
	{
		$this->nom = $_nom;
	}
	
	/**
	 * Setter d'espèce
	 * @param l'espèce de l'animal 
	 */
	public function setEspece($_espece)
	{
		$this->espece = $_espece;
	}

	/**
	 * Setter de cri
	 * @param le cri de l'animal 
	 */
	public function setCri($_cri)
	{
		$this->cri = $_cri;
	}
	
	/**
	 * Setter de propriétaire
	 * @param le propriétaire de l'animal 
	 */
	public function setProprietaire($_proprietaire)
	{
		$this->proprietaire = $_proprietaire;
	}
	
	/**
	 * Setter d'âge
	 * @param l'âge de l'animal 
	 */
	public function setAge($_age)
	{
		$this->age = $_age;
	}
}