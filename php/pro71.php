<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
        sort() - sort arrays in ascending order
        rsort() - sort arrays in descending order
    */

    $cars = ["Toyota", "Hyundai", "Mahindra", "Suzuki", "Tata", "Ford", "Audi", "BMWs"];

    echo "<hr>"; print_r($cars);

    sort($cars);

    echo "<hr>"; print_r($cars);

    rsort($cars);

    echo "<hr>"; print_r($cars);
    ?>
</body>

</html>