<?php
    
    $ip1 = "192.196.11.22";

    if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>