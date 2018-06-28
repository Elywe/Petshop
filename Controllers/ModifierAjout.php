<?php 
	/**
	 * Permet d'update l'animal
	 */
	require_once("Models/AnimalsManager.php");
	require_once("Models/Animal.php");
	$animalManager = new AnimalsManager();
	//Si on appuye sur le bouton Valider
	if (isset($_POST['Valider'])) {
		//On supprime 'Valider' du tableau $_POST afin de n'avoir dans $_POST que les données d'un Animal
		unset($_POST['Valider']);
		foreach ($_POST as $key => $value) {
			$_POST[$key] = htmlspecialchars($value);
		}
		$animal = new Animal($_POST);
		//On update l'animal avec le nouvel animal qu'on a crée grâce aux données contenu dans $_POST
		$animalManager->update($animal);
		$animaux = $animalManager->getList();
		include_once("Views/vueMenu.php");
	}
	else{
		include_once("Views/vueAjout.php");
	}
 ?>