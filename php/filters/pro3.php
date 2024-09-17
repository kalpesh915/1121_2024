<?php
    $ip1 = "<h1>Welcome to world of PHP</h1>";
    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);
    echo $ip1;
?>