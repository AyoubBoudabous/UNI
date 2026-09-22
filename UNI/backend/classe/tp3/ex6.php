<?php
echo "<form method='post'>
Chaine : <input type='text' name='chaine'>
<input type='submit' value='Valider'>
</form>";

if (isset($_POST['chaine']) && $_POST['chaine'] != '') {
	$mots = explode(' ', $_POST['chaine']);
	$initiales = '';

	foreach ($mots as $mot) {
		if ($mot != '') {
			$initiales .= strtoupper($mot[0]);
		}
	}

	echo "Initiales : " . $initiales;
}
?>
