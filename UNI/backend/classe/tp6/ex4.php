<?php

class Personne {
    public $nom;
    public $prenom;
    public $adresse;

    public function __construct($nom, $prenom, $adresse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    public function __destruct() {
    }

    public function getpersonne() {
        return "Nom : " . $this->nom . "<br>Prénom : " . $this->prenom . "<br>Adresse : " . $this->adresse;
    }

    public function setadresse($nouvelleAdresse) {
        $this->adresse = $nouvelleAdresse;
    }
}

$p1 = new Personne("Ali", "Amine", "ariana");
$p2 = new Personne("Benali", "trump", "wawa");

echo $p1->getpersonne() . "<br><br>";
echo $p2->getpersonne() . "<br><br>";

$p1->setadresse("Marrakech");
echo $p1->getpersonne() . "<br><br>";

unset($p2);
?>
