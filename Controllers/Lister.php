<?php 
/**
 * Permet d'afficher la liste des animaux
 */
	include_once("Models/AnimalsManager.php");
	$manager = new AnimalsManager();
	$animaux = $manager->getList();
	include_once("Views/vueLister.php");
?>