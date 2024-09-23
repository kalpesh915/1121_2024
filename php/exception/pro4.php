<?php
function division($ip1, $ip2)
{
    if ($ip2 == 0) {
        throw new Exception("Division not Possible");
    } else {
        echo "<hr> Division is " . ($ip1 / $ip2);
    }
}

echo "<hr> Before Error";
try {
    division(1000, 10);
} catch (Exception $error) {
    echo "<hr> Error is $error";
}finally{
    echo "<hr> This Code must be executed";
}
echo "<hr> After Error";
