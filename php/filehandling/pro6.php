<?php
    $file = fopen("data.txt", "r");

    if(!$file){
        die("Unable to open file");
    }

    // PHP Check End-Of-File - feof()

    while(!feof($file)){
        echo "<hr> ".fgetc($file);
    }

    fclose($file);
?>