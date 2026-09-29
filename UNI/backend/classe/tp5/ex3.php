<?php
$x = $_GET['x'] ?? '';
$y = $_GET['y'] ?? '';
$resultat = '';

if ($x !== '' && $y !== '') {
	$resultat = (float) $x + (float) $y;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Addition</title>
</head>
<body>
	<h1>Addition de deux nombres</h1>
	<form method="get" action="ex3.php">
		 <input type="number" name="x" value="<?= $x ?>">
		 +
		<input type="number" name="y" value="<?= $y ?>">
		<button type="submit">Calcul</button>
	    <input type="text" name="resultat" value="<?= $resultat ?>" readonly>
	</form>
</body>
</html>
