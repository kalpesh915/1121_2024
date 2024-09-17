<?php
    
    $ip1 = "demo@gmail.com";

    if(filter_var($ip1, FILTER_VALIDATE_EMAIL) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>