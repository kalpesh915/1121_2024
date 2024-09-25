<?php

    function printer(iterable $city){
        foreach($city as $ct){
            echo "Welcome to $ct<br>";
        }
    }

    $city = ["Rajkot", "Baroda", "Bhuj", "Surat", "Junagadh", "Jamnagar", "Amreli"];
    printer($city);
?>