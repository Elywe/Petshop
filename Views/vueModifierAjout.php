<?php 
/**
 * Permet d'afficher la vue qui affiche un script montrant tous les attributs de l'animal
 * afin de valider sa modification
 */ 
?>
<h1>Modifier un animal</h1>
<form method="post" action="index.php?section=ModifierAjout">
	<p>Le nom de l'animal</p>
	<input type="hidden" name="identifiant" value="<?php echo $aModifier->getIdentifiant(); ?>">
	<input type="text" name="nom" value="<?php echo $aModifier->getNom() ?>"></br>
	<p>L'espèce de l'animal</p>
	<input type="text" name="espece" value="<?php echo $aModifier->getEspece(); ?>"></br>
	<p>Le propriétaire de l'animal</p>
	<input type="text" name="proprietaire" value="<?php echo $aModifier->getProprietaire(); ?>"></br>
	<p>Le cri de l'animal</p>
	<input type="text" name="cri" value="<?php echo $aModifier->getCri(); ?>"></br>
	<p>L'âge de l'animal</p>
	<input type="text" name="age" value="<?php echo $aModifier->getAge(); ?>"></br></br>
	<input type="submit" name="Valider" value="Valider">
</form>
</body>
</html>