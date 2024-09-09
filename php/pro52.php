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
            PHP Associative Arrays
            Associative arrays are arrays that use named keys that you assign to them.
        */ 

        $student = ["roll" => 1, "fname" => "Khushboo", "lname" => "Kaneriya", "city" => "Rajkot"];

        foreach($student as $value){
            echo "<hr> $value";
        }
    ?>
</body>
</html>