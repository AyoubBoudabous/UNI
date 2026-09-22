<?php
//q1,2
echo "<form method='post'>
Chaîne : <input type='text' name='chaine' ><br>
Position de départ : <input type='number' name='position' ><br>
Longueur : <input type='number' name='longueur' ><br>
<input type='submit' value='Valider'>
</form>";

if (isset($_POST['chaine']) && $_POST['chaine'] !== '') {
	$chaine = $_POST['chaine'];
	echo "Longueur de la chaîne : " . strlen($chaine) . "<br>";
}
//q3
if (isset($_POST['chaine'], $_POST['position'], $_POST['longueur'])
	&& $_POST['chaine'] !== ''
	&& $_POST['position'] !== ''
	&& $_POST['longueur'] !== '') {
	$position = $_POST['position'];
	$longueur = $_POST['longueur'];

	echo "Sous-chaîne : " . substr($chaine, $position, $longueur);
}
//q4
if (isset($chaine) && $chaine !== '') {
	$chaineInverse = "";
	for ($i = strlen($chaine) - 1; $i >= 0; $i--) {
		$chaineInverse .= $chaine[$i];
	}

	echo "<br>Chaîne inversée : " . $chaineInverse;
}



?>
