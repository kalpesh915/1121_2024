<?php
    function myCallback($name){
        //return strlen($name);
        return strtoupper($name);
    }

    $students = ["Khushboo", "Riya", "Palak", "Nirali", "Sima", "Rima", "Diya"];
    $result = array_map("myCallback", $students);
    print_r($result);
?>