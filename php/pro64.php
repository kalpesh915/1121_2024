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
        $cars = array("Volvo", "BMW", "Toyota");
        array_splice($cars, 1, 1);
    */

    $cars = array("Volvo", "BMW", "Toyota");
    echo "<hr> Before Update";
    var_dump($cars);

    array_splice($cars, 1, 1);

    echo "<hr> After Update";
    var_dump($cars);
    ?>
</body>

</html>