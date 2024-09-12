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
    class City{
        public $city, $state, $country;
        public function __construct($city, $state, $country){
            $this->city = $city;
            $this->state = $state;
            $this->country = $country;            
        }
    }

    $city = new City("Rajkot", "Gujarat", "India");

    foreach($city as $key => $value){
        echo "<hr> $key  $value";
    }
?>