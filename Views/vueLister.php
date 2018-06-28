<?php 
/**
 * Permet d'afficher la vue permettant de lister tous les animaux de la base de données
 */ 
?>
<link rel="stylesheet" type="text/css" href="style.css">
<table>
	<tr>
		<th>identifiant</th>
		<th>nom</th>
		<th>espece</th>
		<th>cri</th>
		<th>propriétaire</th>
		<th>age</th>
		<th>action</th>
	</tr>
	<?php
	foreach($animaux as $animal){
		echo "<tr><td>".$animal->getIdentifiant()."</td>";
		echo "<td>".$animal->getNom()."</td>";
		echo "<td>".$animal->getEspece()."</td>";
		echo "<td>".$animal->getCri()."</td>";
		echo "<td>".$animal->getProprietaire()."</td>";
		echo "<td>".$animal->getAge()."</td>";
		echo "<td>";
		echo '<a href="index.php?section=Supprimer&id='.$animal->getIdentifiant().'">supprimer </a>';
		echo '<a href="index.php?section=Modifier&id='.$animal->getIdentifiant().'">modifier </a>';
		echo "</td></tr>";
	}
	?>
</table>
</body>
</html>