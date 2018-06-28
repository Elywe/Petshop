<?php
/**
  * Permet d'ajouter un animal à la base de données
  */ 
	//On inclus les deux modèles
	require_once("Models/AnimalsManager.php");
	require_once("Models/Animal.php");
	$animalManager = new AnimalsManager();
	//Quand on valide
	if (isset($_POST['Valider'])) {
		//On supprime 'Valider' du tableau $_POST afin de n'avoir dans $_POST que les données d'un Animal
		unset($_POST['Valider']);
		foreach ($_POST as $key => $value) {
			$_POST[$key] = htmlspecialchars($value);
		}
		//On crée un animal avec les données contenu dans $_POST & on l'ajoute à la BDD
		$animal = new Animal($_POST);
		$animalManager->add($animal);
		$animaux = $animalManager->getList();
	}
	else{
		include_once("Views/vueAjout.php");
	}
 ?>