<?php

class Ville {
    public $nom;
    public $region;

    public function __construct($nom, $region) {
        $this->nom = $nom;
        $this->region = $region;
    }

    public function afficherVille() {
        echo "la ville " . $this->nom . " est dans la région " . $this->region;
    }
}

$v1 = new Ville("Ariana ville", "Ariana");
$v2 = new Ville("wa3", "wawa");

$v1->afficherVille();
echo "<br>";
$v2->afficherVille();
?>
