<?php 
	/* 
	* On récupère la liste des animaux, puis on la parcourt afin de supprimer un animal,
	* grâce à son nom entré par le user 
	*/
	require_once("Models/AnimalsManager.php");
	require_once("Models/Animal.php");
	$animalManager = new AnimalsManager();
	$animaux = $animalManager->getList();
	//Si on appuye sur Valider
	if (isset($_POST['Ok'])) {
		//On récupère le nom de l'animal à supprimer
		$nom = htmlspecialchars($_POST['nomSuppr']);
			//On le supprime grâce à son nom
			foreach($animaux as $animal) { 
			if ($animal->getNom() == $nom) {
				$animalManager->remove($animal);
				break;
			}
		}
		//On réactualise la liste des animaux après traitement
		$animaux = $animalManager->getList();
		require_once("Views/vueMenu.php");
	}
	//Si l'id de l'animal est set
	else if (isset($_GET['id'])) {
		//On crée un animal avec l'id
		$animal = new Animal(array('identifiant' => $_GET['id']));
		//On supprime l'animal en question de la BDD
		$animalManager->remove($animal);
		$animaux = $animalManager->getList();
		require_once("Views/vueMenu.php");
	}
	else{
		include("Views/vueSupprimer.php");
	}
?>