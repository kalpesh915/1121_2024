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
        array_push($students, "Dhrumil");

        foreach($students as $student){
            echo "<hr> Welcome $student";
        }
    ?>
</body>
</html>