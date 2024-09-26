<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    try{
        $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlQuery = "create table students (id int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(64), phone varchar(20), gender varchar(6), created_at timestamp default current_timestamp, updated_at timestamp default current_timestamp on update current_timestamp)";
        $connection->exec($sqlQuery);
        echo "Database Created";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>