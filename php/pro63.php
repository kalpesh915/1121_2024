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
        Add Multiple Items to Associative Arrays
        To add multiple items to an existing array, you can use the += operator.
    */

    $cars = array("brand" => "Ford", "model" => "Mustang");

    echo "<hr> Before Update";
    var_dump($cars);

    // $cars = ["color" => "red", "year" => 1964];
    $cars += ["color" => "red", "year" => 1964];   
    
    echo "<hr> After Update";
    var_dump($cars);
    ?>
</body>

</html>