<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($hostname, $username, $password);
    if(!$connection){
        die("Connection Failed Due to ". mysqli_connect_error());
    }

    echo "<hr> Connection Successfully";

    mysqli_close($connection);
?>