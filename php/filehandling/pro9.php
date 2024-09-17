<?php
    $file = fopen("data3.txt", "x");

    if(!$file){
        die("Unable to open file");
    }

    fwrite($file, "Welcome to PHP Files with w3schools\n");

    fclose($file);
?>