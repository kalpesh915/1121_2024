<?php
    
    $ip1 = 10;

    if(filter_var($ip1, FILTER_VALIDATE_INT) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>