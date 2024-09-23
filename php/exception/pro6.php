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
    //echo "<hr> Error is ".$error;
    //echo "<hr> Error is ".$error->getMessage();
    //echo "<hr> Error is ".$error->getLine();
    //echo "<hr> Error is ".$error->getFile();
    echo "<hr> Error is ".$error->getCode();
}finally{
    echo "<hr> This Code must be executed";
}
echo "<hr> After Error";
