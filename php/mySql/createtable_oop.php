<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    $sqlQuery = "create table students (id int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(64), phone varchar(20), gender varchar(6), created_at timestamp default current_timestamp, updated_at timestamp default current_timestamp on update current_timestamp)";

    if($connection->query($sqlQuery) === true){
        echo "<hr> Query Executed Successfully";
    }else{
        echo "<hr> Error while Execute Query";
    }

    $connection->close();
?>