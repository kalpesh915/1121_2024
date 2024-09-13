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
    /*
        
    */
    
    function makeSum(...$data){
        $ans = 0;
        foreach($data as $x){
            $ans+=$x;
        }

        echo "<hr> Sum is $ans";
    }

    makeSum(11);
    makeSum(11, 22);
    makeSum(11, 22, 33);
    makeSum(11, 22, 33, 44);
    makeSum(11, 22, 33, 44, 55);
    makeSum(11, 22, 33, 44, 55, 66);
    makeSum(11, 22, 33, 44, 55, 66, 77);
    makeSum(11, 22, 33, 44, 55, 66, 77, 88);
?>
