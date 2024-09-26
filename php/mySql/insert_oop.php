<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('Demo', 'Text', 'Rajkot', 'demo@gmail.com', '9900990099', 'female')";

    if($connection->query($sqlQuery) === true){
        $lastid = $connection->insert_id;
        echo "<hr> Query Executed Successfully with $lastid";
    }else{
        echo "<hr> Error while Execute Query";
    }

    $connection->close();
?>