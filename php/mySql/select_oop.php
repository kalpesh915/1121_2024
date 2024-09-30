<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    $sqlQuery = "select * from students";

    $result = $connection->query($sqlQuery);

    //print_r($result);

    //print_r($result->fetch_array());
    print_r($result->fetch_assoc());

    $connection->close();
?>