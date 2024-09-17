<?php
    
    $ip1 = 110;

    if(filter_var($ip1, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100))) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>