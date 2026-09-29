<?php
echo "<form method='post'>
<input type='text' name='adresse'>
<input type='submit' value='Valider'>
</form>";
if (isset($_POST['adresse'])) {
	$adresse = $_POST['adresse'];
	$positionPoint = strrpos($adresse, '.');
	if (substr($adresse, 0, 4) == 'www.' && $positionPoint !== false && $positionPoint > 3) {
		$nom = substr($adresse, 4, $positionPoint - 4);
		$extension = substr($adresse, $positionPoint + 1);

		if (strpos($nom, '-') !== false) {
			$groupes = explode('-', $nom);
		} else {
			$groupes = explode('.', $nom);
		}

		if (count($groupes) == 1) {
			$nomValide = ctype_alpha($groupes[0]);
		} elseif (count($groupes) == 2) {
			$nomValide = ctype_alpha($groupes[0]) && ctype_alpha($groupes[1]);
		} else {
			$nomValide = false;
		}

		if ($nomValide && ctype_alpha($extension) && strlen($extension) >= 2 && strlen($extension) <= 4) {
			echo 'Adresse valide';
		} else {
			echo 'Adresse invalide';
		}
	} else {
		echo 'Adresse invalide';
}}
?>

