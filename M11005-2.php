<?php

$employed = [
    "EM001" => [
        "id" => 3,
        "firstName" => "Claude",
        "lastName" => "Basset",
        "age" => 54,
        "genre" => "M"
    ],
    "EM005" => [
        "id" => 6,
        "firstName" => "Polly",
        "lastName" => "Smith",
        "age" => 41,
        "genre" => "F"
    ],
    "EM065" => [
        "id" => 13,
        "firstName" => "Nabil",
        "lastName" => "Bensaoud",
        "age" => 34,
        "genre" => "M"
    ],
];

$employed["EM001"]=[
    "id" => 3,
    "firstName" => "Claude",
    "lastName" => "Basset",
    "age" => 54,
    "genre" => "M"
];

$employed["EM005"] = [
    "id" => 6,
    "firstName" => "Polly",
    "lastName" => "Smith",
    "age" => 41,
    "genre" => "F"
];


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M11005-2 : Les arrays</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>

    <div>
        <?php
            var_dump($employed["EM005"]);
        ?>
    </div>
</body>

</html>