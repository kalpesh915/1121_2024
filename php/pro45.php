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
            Array
        */ 

        $students = ["Khushboo", "Kevin", "Kenil", "Sujal", "Priya"];
        echo "<hr> Welcome ".$students[0];
        $students[0] = "Khushboo Kaneriya";
        echo "<hr> Welcome ".$students[0];
    ?>
</body>
</html>