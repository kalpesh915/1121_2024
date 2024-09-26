<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    
    $sqlQuery = "delete from students where id > 25";

    if($connection->query($sqlQuery) === true){
        echo $connection->affected_rows;
        echo "<hr> Query Executed Successfully ";
    }else{
        echo "<hr> Error while Execute Query";
    }

    $connection->close();
?>