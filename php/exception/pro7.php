<?php
function division($ip1, $ip2)
{
    if ($ip2 == 0) {
        throw new Exception("Division not Possible", 101);
    } else {
        echo "<hr> Division is " . ($ip1 / $ip2);
    }
}

echo "<hr> Before Error";
try {
    division(1000, 0);
} catch(Exception $error){
    //echo "$error";
    echo "<hr> Error in {$error->getMessage()} in File {$error->getFile()} and Line Number is {$error->getLine()} and Error Code is {$error->getCode()}";
}finally{
    echo "<hr> This Code must be executed";
}
echo "<hr> After Error";
