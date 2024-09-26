<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    try{
        $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('Demo', 'Text', 'Rajkot', 'demo@gmail.com', '9900990099', 'female')";
        $connection->exec($sqlQuery);
        $lastid = $connection->lastInsertId();
        echo "Query Executed $lastid";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>