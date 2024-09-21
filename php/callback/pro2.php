<?php
    
    $students = ["Khushboo", "Riya", "Palak", "Nirali", "Sima", "Rima", "Diya"];
    $result = array_map(function($name){ return strtoupper($name); }, $students);
    print_r($result);
?>