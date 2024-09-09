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
            OR
            C1  C2  ans
            0   1   1
            1   0   1
            0   0   0
            1   1   1
        */ 
        echo "<hr>";
        var_dump((10 > 100 or 10 > 5));
        echo "<hr>";
        var_dump((100 > 10 or 10 > 50));
        echo "<hr>";
        var_dump((10 > 100 or 10 > 50));
        echo "<hr>";
        var_dump((100 > 10 or 10 > 5));
    ?>
</body>
</html>