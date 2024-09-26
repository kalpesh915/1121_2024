<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sampledb";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("insert into students (fname, lname, city, email, phone, gender) values (:fname, :lname, :city, :email, :phone, :gender)");

    $statement->bindParam("fname", $fname);
    $statement->bindParam("lname", $lname);
    $statement->bindParam("city", $city);
    $statement->bindParam("email", $email);
    $statement->bindParam("phone", $phone);
    $statement->bindParam("gender", $gender);

    $fname = "Sample User";
    $lname = "Sample";
    $city = "Ahamdabad";
    $email = "sample@gmail.com";
    $phone = "9990009990";
    $gender = "female";

    $statement->execute();
    echo "Query Executed";
} catch (Exception $err) {
    echo "<hr> Error is $err";
}
$connection = null;
