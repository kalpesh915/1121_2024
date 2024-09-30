<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    try{
        $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $connection->prepare("select * from students");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);

        foreach($result as $row){
            print_r($row);
            echo "<hr>";
        }

    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>