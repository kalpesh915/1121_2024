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
    $i = 0;
    
    while($i <= 10){
        $i++;
        if($i == 5){
            continue;
        }
        echo " $i";
        
    }
?>