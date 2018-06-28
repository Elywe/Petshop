<?php 
	/*
	* On récupère la liste des animaux, puis on la parcourt afin de modifier un animal,
	* grâce à son nom entré par le user 
	*/
	require_once("Models/AnimalsManager.php");
	require_once("Models/Animal.php");
	$animalManager = new AnimalsManager();
	$animaux = $animalManager->getList();
	//Si on appuye sur Valider
	if (isset($_POST['Ok'])) {
		//Contient l'animal à modifier
		$aModifier = null;
		//On récupère le nom entré par le user
		$nom = $_POST['nomModif'];
		//On cherche l'animal qu'on doit modifier grâce à son nom
		foreach($animaux as $animal) { 
			if ($animal->getNom() == $nom) {
				$aModifier = $animal;
				break;
			}
		}
		//Si l'animal existe on va vers le scrit de modification
		if($aModifier != null){
			require_once("Views/vueModifierAjout.php");
		}
		//Sinon on reste sur le même script
		else{
			$error = "Cet animal n'existe pas";
			include_once("Views/vueModifier.php");
		}
	}
	//Si l'id de l'animal est set
	else if(isset($_GET['id'])){
		//On récupère l'animal à modifier avec
		$aModifier = $animalManager->get($_GET['id']);
		if ($aModifier != null) {
			require_once("Views/vueModifierAjout.php");
		}
		else{
			$error = "Cet animal n'existe pas";
			include_once("Views/vueModifier.php");
		}
	}
	else{
		include_once("Views/vueModifier.php");
	}
?>