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
        Passing Arguments by Reference
        In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.  When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
    */
    
    $ip1 = 10;

    echo "<hr> before function\$ip1 is $ip1";

    function add10($ip1){
        $ip1 += 10;
        echo "<hr> in function\$ip1 is $ip1";
    }

    add10($ip1);
    echo "<hr> after function\$ip1 is $ip1";
?>