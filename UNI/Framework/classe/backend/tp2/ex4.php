<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" id="" name="nb">
        <?php
    $nb = $_POST["nb"];
    if (10> $nb) {
        echo "echec";
    }
    else if (10<= $nb && $nb <=12) {
        echo "mention passable";
    }
   else if (12< $nb && $nb < 14) {echo"assez bien";}
    else if (14<=$nb && $nb<=16) {echo "mention bien";}
    else if (16<$nb) {echo "mention tres bien";}
    ?>
    </form>
    
</body>
</html> 
