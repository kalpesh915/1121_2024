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
        Remove the Last Item
        The array_pop() function removes the last item of an array.
    */

    $cars = array("brand" => "Ford", "color"=>"black","model" => "Mustang", "year" => 1964);
    array_pop($cars);

    print_r($cars);

    ?>
</body>

</html>