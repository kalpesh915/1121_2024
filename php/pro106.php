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
    $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Surat"];

    $count = count($city);

    for($x = 0; $x < $count; $x++){
        echo "<hr> Welcome to ". $city[$x];
    }
?>