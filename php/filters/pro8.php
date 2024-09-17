<?php
    
    $ip1 = "https://www.google.com";

    if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>