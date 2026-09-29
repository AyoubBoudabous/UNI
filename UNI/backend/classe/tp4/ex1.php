<?php
echo"<form method='post'>
Age : <input type='text' name='age'>
<input type='submit' value='Valider'>
</form>";

if (isset($_POST['age'])) {
	$age = $_POST['age'];
	if ($age < 100) {
		echo "Age valide";
	} else {
		echo "Age invalide";
	}
}
