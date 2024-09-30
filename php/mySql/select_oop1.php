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

    while($row = $result->fetch_assoc()){
        print_r($row);
        echo "<hr>";
    }   

    $connection->close();
?>