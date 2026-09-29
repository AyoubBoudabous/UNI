<?php
echo "<form method='post'>
<input type='text' name='adresse'>
<input type='submit' value='Valider'>
</form>";
if (isset($_POST['adresse'])) {
	$adresse = $_POST['adresse'];
	if (validerAdresseMail($adresse)) {
		echo 'Adresse valide';
	} else {
		echo 'Adresse invalide';
	}
}
function validerAdresseMail($adresse)
{
	$modele = '/\A[A-Za-z][A-Za-z0-9]*(?:[.-][A-Za-z]+)?@[A-Za-z]{2,}\.[A-Za-z]{2,4}\z/';
	return preg_match($modele, $adresse) === 1;
}
?>
