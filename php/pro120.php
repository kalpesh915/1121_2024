<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    function msg(string $username, int $year){
        echo "<hr> Welcome $username to world of PHP function with $year";
    }

    msg("Khushubu", 1998);
    msg("Aditya", 1994);
    msg(2002, "Anjana");
?>