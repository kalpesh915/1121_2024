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
    // find maximum out of 3 values with nested if

    $ip1 = 10; 
    $ip2 = 12;
    $ip3 = 30;

    if($ip1 > $ip2){
        if($ip1 > $ip3){
            $ans = $ip1;
        }else{
            $ans = $ip3;
        }
    }else{
        if($ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }
    }

    echo "Answer is $ans";
?>