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
        Remove the First Item
        The array_shift() function removes the first item of an array.
    */

    $cars = array("brand" => "Ford", "color"=>"black","model" => "Mustang", "year" => 1964);
    array_shift($cars);

    print_r($cars);

    ?>
</body>

</html>