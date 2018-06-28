<?php 
/**
 * Permet d'afficher la vue permettant de supprimer un animal
 */ 
?>
<table>
	<tr>
		<th>identifiant</th>
		<th>nom</th>
		<th>espece</th>
		<th>cri</th>
		<th>propriétaire</th>
		<th>age</th>
	</tr>
	<?php
	foreach($animaux as $animal){
		echo "<tr><td>".$animal->getIdentifiant()."</td>";
		echo "<td>".$animal->getNom()."</td>";
		echo "<td>".$animal->getEspece()."</td>";
		echo "<td>".$animal->getCri()."</td>";
		echo "<td>".$animal->getProprietaire()."</td>";
		echo "<td>".$animal->getAge()."</td></tr>";
	}
	?>
</table>
<h1>Supprimer un animal</h1>
<form method="post" action="index.php?section=Supprimer">
	<p>Le nom de l'animal</p>
	<input type="text" name="nomSuppr" value=""></br></br>
	<input type="submit" name="Ok" value="Valider">
</form>
</body>
</html>