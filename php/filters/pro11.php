<?php
    
    $ip1 = "https://www.gmail.com?city=rajkot";

    if(filter_var($ip1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>