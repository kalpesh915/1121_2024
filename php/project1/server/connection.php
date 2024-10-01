<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("Connection Failed Due to ".$connection->connect_error);
    }

    function filterData($input){
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        return $input;
    }
?>