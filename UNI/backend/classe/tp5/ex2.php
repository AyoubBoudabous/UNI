<?php
require_once("fct.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'étudiant</title>
    <style>
        .etudiant {
            color: red; font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Informations de l'étudiant</h1>
    <form method="post" >
        <label>Nom : <input type="text" name="nom" required></label>
        <label>Prénom : <input type="text" name="prenom" required></label>
        <label>Classe : <input type="text" name="classe" required></label>
        <button type="submit">Valider</button>
    </form>
    <?php
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['classe'])) {
            $etudiant = afficher_message($_POST['nom'], $_POST['prenom'], $_POST['classe']);
            echo '<p class="etudiant">Vous êtes sur le site de '
                . $etudiant['nom'] . ', '
                . $etudiant['prenom'] . ' et '
                . $etudiant['classe'] . '.</p>';
        }
        ?>
</body>
</html>