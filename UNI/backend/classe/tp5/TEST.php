<?php
 //affichage des informations reçues
$nom = $_GET['variable_1'] ?? '';
$prenom = $_GET['variable_2'] ?? '';

echo "Informations reçues : <br/>";
echo "Nom: ".$nom."<br/>";
echo "Prénom: ".$prenom."<br/>";
?>
