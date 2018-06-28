<?php 
/**
 * Permet de créer un index pour naviguer sur les différents scripts où,
 * on inclut à chaque script le menu et on renvoit un script en fonction de sa section
 */
include_once('Views/vueMenu.php');	
if (!isset($_GET['section']) OR $_GET['section'] == 'index') {
	include_once('Controllers/Menu.php');
}
else{
	include_once('Controllers/'.$_GET['section'].'.php');
}
?>
<link rel="stylesheet" type="text/css" href="style.css">