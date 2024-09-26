<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    /*$connection = new PDO("mysql:host=$hostname;", $username, $password);
    echo "Database Server Connected";*/

    try{
        $connection = new PDO("mysql:host=$hostname;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }catch(Exception $err){
        echo "Error is $err";
    }

    $connection = null;
?>