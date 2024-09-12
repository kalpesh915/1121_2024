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
        case 1:{
            echo "<hr> Value is One";
            break;
        }
        case 2:{
            echo "<hr> Value is Two";
            break;
        }
        case 3:{
            echo "<hr> Value is Three";
            break;
        }
        case 4:{
            echo "<hr> Value is Four";
            break;
        }
        case 5:{
            echo "<hr> Value is Five";
            break;
        }
        default:{
            echo "<hr> out of Range";
            break;
        }
    }
?>