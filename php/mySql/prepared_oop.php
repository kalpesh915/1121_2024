<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    $statement = $connection->prepare("insert into students (fname, lname, city, email, phone, gender) values (?,?,?,?,?,?)");

    $statement->bind_param("ssssss", $fname, $lname, $city, $email, $phone, $gender);
    $fname = "Sample User";
    $lname = "Sample";
    $city = "Ahamdabad";
    $email = "sample@gmail.com";
    $phone = "9990009990";
    $gender = "female";

    
    if($statement->execute()){
        echo "<hr> Query Executed Successfully ";
    }else{
        echo "<hr> Error while Execute Query";
    }

    $connection->close();
?>