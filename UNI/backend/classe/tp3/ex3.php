<?php
//q1
$TMOTS = array(
	"ali" => "pass123",
	"sara" => "abc456",
	"youssef" => "test789"
);
//q2
echo "<form method='post'> <label>Choisissez une personne : </label> <select name='personne'>";

foreach ($TMOTS as $personne => $motDePasse) {
	echo "<option value='" . $personne . "'>" . $personne . "</option>";
}

echo "</select> <input type='submit' value='Afficher le mot de passe'> </form>";

if (isset($_POST['personne'])) {
	$personne = $_POST['personne'];
	echo "Mot de passe de " . $personne . " : " . $TMOTS[$personne];
}
//q3
echo "<form method='post'> <label>Choisissez un mot de passe : </label> <select name='motDePasse'>";

foreach ($TMOTS as $personne => $motDePasse) {
	echo "<option value='" . $motDePasse . "'>" . $motDePasse . "</option>";
}

echo "</select> <input type='submit' value='Afficher la personne'> </form>";

if (isset($_POST['motDePasse'])) {
	$personne = array_search($_POST['motDePasse'], $TMOTS);
	echo "Personne correspondante : " . $personne;
}


?>
