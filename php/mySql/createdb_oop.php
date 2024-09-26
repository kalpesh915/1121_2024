<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        die("<hr> Error while connecting with Database server ".$connection->connect_error);
    }

    $sqlQuery = "create database sampledb";

    if($connection->query($sqlQuery) === true){
        echo "<hr>Query Executed Successfully";
    }else{
        echo "<hr>Error while Query Execution";
    }

    $connection->close();
?>