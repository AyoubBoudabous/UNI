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
    if ($nb % 2 == 0) {
        echo "nb est paire";    
    }else {
        echo"nb est impaire";
    }
    ?>
    </form>
    
</body>
</html> 
