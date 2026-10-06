<?php 
class Test {
    public $texte = "Hello World!";
    public function changerTexte() {
        if ($this->texte == "Hello World!") {
            $this->texte = "Bonjour tout le monde !";
            echo $this->texte;
        }else {
            $this->texte = "Hello World!";
            echo $this->texte;
        }
    }
    
}
$t = new Test();
echo "<button onclick='changerTexte()'>Changer le texte</button>";
