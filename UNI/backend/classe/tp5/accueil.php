<?php
session_start();
require_once("fct.php");
$informations = $_SESSION['informations_formulaire'] ?? null;
unset($_SESSION['informations_formulaire']);
?>
<html>
    <title>Les fonctions en PHP</title>
    <body>
        <h1>Bienvenue sur mon site</h1>
        <br>
        <center>
            <?php
            display_menu();
            ?>
        </center>
        <?php if ($informations !== null): ?>
            <h2>Informations reçues</h2>
            <p>Nom : <?= $informations['nom'] ?></p>
            <p>Prénom : <?= $informations['prenom'] ?></p>
            <p>Email : <?= $informations['email'] ?></p>
        <?php endif; ?>
    </body>
</html>