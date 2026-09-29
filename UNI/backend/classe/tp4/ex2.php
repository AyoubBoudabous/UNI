<?php
echo "<form method='post'>
<input type='text' name='adresse'>
<input type='submit' value='Valider'>
</form>";
if (isset($_POST['adresse'])) {
	$adresse = $_POST['adresse'];
	if (preg_match('/www\.[A-Za-z]+(?:[-.][A-Za-z]+)?\.[A-Za-z]{2,4}/', $adresse)) {
		echo 'Adresse valide';
	} else {
		echo 'Adresse invalide';
	}
}
?>

