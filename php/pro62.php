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
        Add Multiple Array Items
        To add multiple items to an existing array, use the array_push() function.
    */

    $fruits = array("Apple", "Banana", "Cherry");

    echo "<hr> Before Update";
    var_dump($fruits);

    array_push($fruits, "Kiwi", "Lichi", "Pineapple");
    
    echo "<hr> After Update";
    var_dump($fruits);
    ?>
</body>

</html>