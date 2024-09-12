<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    date_default_timezone_set("Asia/Kolkata");
    $hours = date("H");
    //echo $today;

    if($hours >= 6 and $hours <= 10){
        echo "Good Morning";
    }else if($hours > 10 and $hours <= 12){
        echo "Good Noon";
    }else if($hours > 12 and $hours <= 15){
        echo "Good Aftere Noon";
    }else if($hours > 15 ){
        echo "Good Evening";
    }
?>