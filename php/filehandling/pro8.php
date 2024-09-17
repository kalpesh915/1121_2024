<?php
    $file = fopen("data2.txt", "a");

    if(!$file){
        die("Unable to open file");
    }

    fwrite($file, "Welcome to PHP Files with w3schools\n");

    fclose($file);
?>