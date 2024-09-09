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
        Add Array Item
        To add items to an existing array, you can use the bracket [] syntax.
    */

    $fruits = array("Apple", "Banana", "Cherry");

    echo "<hr> Before Update";
    var_dump($fruits);

    $fruits[] = "Orange";
    $fruits[] = "Kiwi";
    
    echo "<hr> After Update";
    var_dump($fruits);
    ?>
</body>

</html>