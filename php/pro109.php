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
    $city = ["Rajkot"=>1342134, "Baroda"=>2315345, "Bhuj"=>2341234, "Ahamdabad"=>23414234, "Surat"=>42331241234];

    foreach($city as $key => $value){
        echo "<hr> Welcome to $key population is $value";
    }
?>