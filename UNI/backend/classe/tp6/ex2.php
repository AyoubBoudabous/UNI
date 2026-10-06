<?php
class Ville {
    public $nom;
    public $region;

    public function afficherVille() {
        echo "la ville " . $this->nom . " est dans la région " . $this->region;
    }
}

$v1 = new Ville();
$v1->nom = "Ariana ville";
$v1->region = "Ariana";

$v2 = new Ville();
$v2->nom = "wa";
$v2->region = "wawa";

$v1->afficherVille();
echo "<br>";
$v2->afficherVille();
?>
