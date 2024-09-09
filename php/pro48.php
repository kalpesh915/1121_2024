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
        $students[10] = "Dhrumil";

        echo "<hr> Length of Array is ".count($students);

        foreach($students as $student){
            echo "<hr> Welcome $student";
        }
    ?>
</body>
</html>