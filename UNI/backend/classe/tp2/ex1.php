<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" name="r1" >
        <input type="text" name="r2">
        <input type="submit" value="test">
    </form>
</body>
</html>
<?php
if (isset($_POST["r1"]) && isset($_POST["r2"])) {

    $r1 = $_POST["r1"];
    $r2 = $_POST["r2"];
    if ($r1 == $r2) {
        echo "égale";
        }else {
            echo "non égale";
            }
            }
