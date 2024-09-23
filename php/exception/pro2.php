<?php
    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division not Possible");
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }

    //division(1000, 34);
    division(1000, 0);
?>