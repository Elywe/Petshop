<?php 
/**
 * Permet d'afficher la vue permettant d'ajouter un animal
 */ 
?>
<h1>Ajouter un animal</h1>
<form method="post" action="index.php?section=Ajout">
	<p>Le nom de l'animal</p>
	<input type="text" name="nom" value=""></br>
	<p>L'espèce de l'animal</p>
	<input type="text" name="espece" value=""></br>
	<p>Le propriétaire de l'animal</p>
	<input type="text" name="proprietaire" value=""></br>
	<p>Le cri de l'animal</p>
	<input type="text" name="cri" value=""></br>
	<p>L'âge de l'animal</p>
	<input type="text" name="age" value=""></br></br>
	<input type="submit" name="Valider" value="Valider">
</form>
</body>
</html>