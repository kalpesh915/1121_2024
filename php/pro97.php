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
    $i = 24784;
    $ans = 0;

    while($i > 0){
        $ans++;
        $i = (int)($i / 10);
    }

    echo $ans;
?>