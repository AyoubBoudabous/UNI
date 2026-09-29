<?php
session_start();

$nom = '';
$prenom = '';
$email = '';
$erreur = '';

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];

	if ($nom === '' || $prenom === '' || $email === '') {
		$erreur = 'Tous les champs sont obligatoires.';
	} elseif (strpos($email, '@') === false) {
		$erreur = 'L’adresse email doit contenir le caractère @.';
	} else {
		$_SESSION['informations_formulaire'] = array(
			'nom' => $nom,
			'prenom' => $prenom,
			'email' => $email
		);
		header('Location: accueil.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire</title>
</head>
<body>
	<h1>Formulaire d’informations</h1>
	<?php if ($erreur !== ''): ?>
		<p style="color: red;"><?= $erreur ?></p>
	<?php endif; ?>
	<form method="post" action="ex5.php">
		<label>Nom : <input type="text" name="nom" value="<?= $nom ?>" required></label>
		<br>
		<label>Prénom : <input type="text" name="prenom" value="<?= $prenom ?>" required></label>
		<br>
		<label>Email : <input type="text" name="email" value="<?= $email ?>" required></label>
		<br>
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
