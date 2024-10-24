<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed due to " . $conn->connect_error);
}

function filterData($data)
{
    global $conn;
    foreach ($data as $tmp) {
        $tmp = trim($tmp);
        $tmp = stripslashes($tmp);
        $tmp = htmlspecialchars($tmp);
        $tmp = $conn->real_escape_string($tmp);
    }

    return $data;
}
