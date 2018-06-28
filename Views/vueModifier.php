<?php 
/**
 * Permet d'afficher la vue permettant d'entrer le nom de l'animal à modifier
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
<h1>Modifier un animal</h1>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<form method="post" action="index.php?section=Modifier">
	<p>Le nom de l'animal</p>
	<input type="text" name="nomModif" value=""></br></br>
	<input type="submit" name="Ok" value="Valider">
</form>
</body>
</html>