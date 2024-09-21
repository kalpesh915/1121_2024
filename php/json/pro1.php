<?php
    $student = ["roll"=> 1, "fname"=> "Khushboo", "lname"=> "Kaneriya", "city"=> "Rajkot", "phone"=> "9876543210", "gender"=> "Female"];

    print_r($student); // array

    $jsonData = json_encode($student);

    echo "<hr> JSON Data is ".$jsonData;
?>