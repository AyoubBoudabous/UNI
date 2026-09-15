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
    if ($nb % 3 == 0 && $nb %5==0 ) {
        echo "nb est div 3 et 5 ";    
    }else {
        echo"neine";
    }
    ?>
    </form>
    
</body>
</html> 
