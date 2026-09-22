<?php
//q1
$tabpays1 = array(
	"Maroc",
	"France",
	"Espagne",
	"Italie",
	"Canada"
);

foreach ($tabpays1 as $pays) {
	echo $pays . "<br>";
}
//q2
echo "<h3>Ordre alphabétique croissant</h3>";
sort($tabpays1);
foreach ($tabpays1 as $pays) {
	echo $pays . "<br>";
}

echo "<h3>Ordre alphabétique décroissant</h3>";
rsort($tabpays1);
foreach ($tabpays1 as $pays) {
	echo $pays . "<br>";
}

//q3
$tabpays2 = array(
	"Rabat" => "Maroc",
	"Paris" => "France",
	"Madrid" => "Espagne",
	"Rome" => "Italie",
	"Ottawa" => "Canada"
);

echo "<h2>Tableau associatif tabpays2</h2>";
foreach ($tabpays2 as $capitale => $pays) {
	echo $pays . " - Capitale : " . $capitale . "<br>";
}

echo "<h3>Indices dans l'ordre alphabétique croissant</h3>";
ksort($tabpays2);
foreach ($tabpays2 as $capitale => $pays) {
	echo $pays . " - Capitale : " . $capitale . "<br>";
}

echo "<h3>Indices dans l'ordre alphabétique décroissant</h3>";
krsort($tabpays2);
foreach ($tabpays2 as $capitale => $pays) {
	echo $pays . " - Capitale : " . $capitale . "<br>";
}

//q4
ksort($tabpays2);

echo "<h3>tabpays2 : indices croissants</h3>";
foreach ($tabpays2 as $capitale => $pays) {
	echo $capitale . " : " . $pays . "<br>";
}

krsort($tabpays2);

echo "<h3>tabpays2 : indices décroissants</h3>";
foreach ($tabpays2 as $capitale => $pays) {
	echo "Capitale : " . $capitale . " - " . $pays . "<br>";
}

