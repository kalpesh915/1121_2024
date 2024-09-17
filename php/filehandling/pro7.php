<?php
    $file = fopen("data1.txt", "w");

    if(!$file){
        die("Unable to open file");
    }

    fwrite($file, "Welcome to PHP Files with w3schools");

    fclose($file);
?>