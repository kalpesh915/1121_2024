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
    $ip1 = 11;

    switch($ip1){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:{
            echo "<hr> Forward Gear";
            break;
        }
        default:{
            echo "<hr> Reverse Gear";
            break;
        }
    }
?>