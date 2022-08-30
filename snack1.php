<?php

$machs = [
[
    "home_team" => "Lakers",
    "guest_team" => "Bulls",
    "home_point" => "105",
    "guest_point" => "102",
],
[
    "home_team" => "Celtics",
    "guest_team" => "Jazz",
    "home_point" => "99",
    "guest_point" => "112",
],
[
    "home_team" => "Cavaliers",
    "guest_team" => "Heat",
    "home_point" => "102",
    "guest_point" => "106",
],
];
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
    <h1>Partite NBA</h1>
    <ul>
        <?php for ($i = 0; $i < count($machs); $i++) : ?>
            <li>
                <h3><?= $machs[$i]["home_team"] ?> - <?= $machs[$i]["guest_team"] ?></h3>
                <h4><?= $machs[$i]["home_point"] ?> | <?= $machs[$i]["guest_point"] ?></h4>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>