<?php
    $file = fopen("data.txt", "r");

    if(!$file){
        die("Unable to open file");
    }

    echo fgets($file);
    echo fgets($file);
    echo fgets($file);

    fclose($file);
?>