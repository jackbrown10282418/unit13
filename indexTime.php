<?php

$name = "Jack";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>lorem ipsum</h1>

    <p>Hello, <?= $name; ?></p>

    <?php
    
    $hour = 12;

    if ($hour < 12) {
        echo "Good Morning";
    }

    elseif ($hour < 18) {
        echo "Good Afternoon";
    }

    elseif ($hour > 22) {
        echo "Good Evening";
    }

    else {
        echo "Good Night";
    } 

    ?>

</body>
</html>

