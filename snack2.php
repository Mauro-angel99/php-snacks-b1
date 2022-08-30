<?php

$name = $_GET["name"];

$mail = $_GET["mail"];

$age = $_GET["age"];

$access = "";


if(strlen($name) >= 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
$access = "Accesso riuscito";
} else{
    $access = "Accesso negato";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="snack2.php" method="GET">
            <input type="text" name="name">
            <input type="text" name="mail">
            <input type="text" name="age">
            <button type="submit" >accedi</button>
        </form>
        <h1>
            <?= $access ?>
        </h1>
    </div>
</body>
</html>