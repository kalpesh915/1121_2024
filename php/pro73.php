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
        asort() - sort associative arrays in ascending order, according to the value
        ksort() - sort associative arrays in ascending order, according to the key
        arsort() - sort associative arrays in descending order, according to the value
        krsort() - sort associative arrays in descending order, according to the key
    */

    $cars = ["id" => 1, "fname" => "sumit", "lname" => "patel", "city" => "rajkot"];

    echo "<hr>"; print_r($cars);

    ksort($cars);

    echo "<hr>"; print_r($cars);

    krsort($cars);

    echo "<hr>"; print_r($cars);
    ?>
</body>

</html>