<?php
    $file = fopen("data.txt", "r");

    if(!$file){
        die("Unable to open file");
    }

    echo fread($file, 100);

    fclose($file);
?>