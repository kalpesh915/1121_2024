<?php
     declare(strict_types=1);
?>
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

    $tmp = 5;
    
    function makeSum(int $ip1, int $ip2){
        // global $tmp;
        
        $ans = ($ip1 + $ip2) * $GLOBALS["tmp"];
        echo "<hr> Sum is $ans";
    }

    makeSum(11, 22);
?>