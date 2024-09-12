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
        PHP Multidimensional Arrays
        In the previous pages, we have described arrays that are a single list of key/value pairs.
        However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
        
        PHP - Multidimensional Arrays
        A multidimensional array is an array containing one or more arrays.
        PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
    */

        $cars = [
            [1, "ford", "Figo", 2009, 5, "Diesel"],
            [2, "ford", "Eco Sport", 2019, 5, "Diesel"],
            [3, "ford", "Fiesta", 2012, 5, "Petrol"],
        ];

        foreach($cars as $car){
            foreach($car as $tmp){
                echo " $tmp";
            }
            echo "<hr>";
        }
    ?>
</body>

</html>