<?php
//q1
$tabnotes1 = array(
	12,
	15,
	10,
	14,
	16
);

$tabcoef = array(
	2,
	3,
	1,
	2,
	4
);
//q2
$somme = 0;
echo "Notes de l'étudiant :<br>";
for ($i = 0; $i < count($tabnotes1); $i++) {
	echo "Note " . ($i + 1) . " : " . $tabnotes1[$i] . "<br>";
	$somme += $tabnotes1[$i];
}

echo "Moyenne : " . ($somme / count($tabnotes1)) . "<br>";
//q3
rsort($tabnotes1);
echo "Notes dans l'ordre décroissant :<br>";
foreach ($tabnotes1 as $note) {
	echo $note . "<br>";
}
//q4
$tabnotes2 = array(
	"Mathématiques" => 12,
	"Français" => 15,
	"Anglais" => 10,
	"Informatique" => 14,
	"Physique" => 16
);
//q5
reset($tabnotes2);
while (key($tabnotes2) !== null) {
	echo key($tabnotes2) . " : " . current($tabnotes2) . "<br>";
	next($tabnotes2);
}


?>
