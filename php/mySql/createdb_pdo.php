<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$hostname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlQuery = "create database sampledb1";
        $connection->exec($sqlQuery);
        echo "Database Created";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>