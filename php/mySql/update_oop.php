<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    //$sqlQuery = "update students set city = 'Rajkot' where id > 50";
    //$sqlQuery = "update students set city = 'Surat' where id > 50";
    //$sqlQuery = "update students set city = 'Rajkot', gender = 'Male', email='demo@gmail.com' where id > 50";
    $sqlQuery = "update students set city = 'Rajkot', gender = 'Male', email='demo@gmail.com'";

    if($connection->query($sqlQuery) === true){
        echo $connection->affected_rows;
        echo "<hr> Query Executed Successfully ";
    }else{
        echo "<hr> Error while Execute Query";
    }

    $connection->close();
?>