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
    $ip1 = 1;

    switch($ip1){
        case "1":{
            echo "<hr> Value is One";
        }
        case 2:{
            echo "<hr> Value is Two";
        }
        case 3:{
            echo "<hr> Value is Three";
        }
        case 4:{
            echo "<hr> Value is Four";
        }
        case 5:{
            echo "<hr> Value is Five";
        }
        default:{
            echo "<hr> out of Range";
        }
    }
?>