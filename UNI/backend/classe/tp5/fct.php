<?php
function display_menu() {
    echo"
    <a href='accueil.php'>Accueil</a>
    <a href='ex2.php'>Exercice 2</a>
    <a href='ex3.php'>Exercice 3</a>
    <a href='ex4.php'>Exercice 4</a>
    <a href='ex5.php'>Exercice 5</a>
    <a href='ex6.php'>Exercice 6</a>
    ";
}

function afficher_message($nom, $prenom, $classe) {
    return array(
        'nom' => $nom,
        'prenom' => $prenom,
        'classe' => $classe
    );
}