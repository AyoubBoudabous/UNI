<?php
$emploi = array(
	"Lundi" => "Push",
	"Mardi" => "Pull",
	"Mercredi" => "Leg",
	"Jeudi" => "Rest",
	"Vendredi" => "Push",
	"Samedi" => "Pull",
	"Dimanche" => "Leg"
);

$emploiDuTemps = "";
foreach ($emploi as $jour => $activite) {
	$emploiDuTemps .= $jour . " : " . $activite . "<br>";
}

echo $emploiDuTemps;
?>
