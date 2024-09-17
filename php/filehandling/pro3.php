<?php
    $file = fopen("data.txt", "r");

    if(!$file){
        die("Unable to open file");
    }

    // echo fread($file, 200);
    echo fread($file, filesize("data.txt"));

    fclose($file);
?>