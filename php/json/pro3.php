<?php
    $jsonData = '{"roll":1,"fname":"Khushboo","lname":"Kaneriya","city":"Rajkot","phone":"9876543210","gender":"Female","married": "true","joiningData": "2025/01/02","languages": ["English", "Hindi", "Gujarati"]}';

    $student = json_decode($jsonData, true);
    // The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
    

    foreach($student as $key => $value){
        echo "<hr> $key is $value";
    }
?>