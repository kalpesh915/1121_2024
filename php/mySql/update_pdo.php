<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sampledb";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("update students set phone = '9999988888' where id > 50");
    $statement->execute();

    echo "Query Executed ".$statement->rowCount();
} catch (Exception $err) {
    echo "<hr> Error is $err";
}
$connection = null;
