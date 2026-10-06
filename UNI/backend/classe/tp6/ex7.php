<?php

abstract class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
}

class Client extends Personne {
    public $adresse;

    public function setcoord($adresse) {
        $this->adresse = $adresse;
        echo "Client : " . $this->getPrenom() . " " . $this->getNom() . "<br>";
        echo "Adresse : " . $this->adresse . "<br>";
    }
}

class Electeur extends Personne {
    public $bureau_de_vote;
    public $vote;
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom, $bureau_de_vote) {
        parent::__construct($nom, $prenom);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = false;
    }

    public function avoter() {
        $this->vote = true;
        echo "L'électeur " . $this->prenom . " " . $this->nom . " a voté au bureau " . $this->bureau_de_vote . ".<br>";
    }
}

$client = new Client("Ali", "Amine");
$client->setcoord("Casablanca");

echo "<hr>";

$electeur = new Electeur("Sara", "Benali", "Bureau 12");
$electeur->avoter();

if ($electeur->vote == true) {
    echo "Vote enregistré : oui";
} else {
    echo "Vote enregistré : non";
}
?>
