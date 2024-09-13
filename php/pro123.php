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
    function makeDiv($ip1, $ip2) : int {
        $ans = $ip1 / $ip2;
        // retunr (int) $ans;
        return $ans;
    }

    echo "<hr> Sum is ".makeDiv(111, 22);
?>