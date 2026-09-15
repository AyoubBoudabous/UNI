<?php
echo "<h1> Calcul sur les variables </h1> ";
$TVA = 0.206;
$prix = 150;
$nombre = 10;

$HT = $nombre * $prix;
$TTC = $HT * (1+$HT);
echo "HT = $HT <br> TTC = $TTC";