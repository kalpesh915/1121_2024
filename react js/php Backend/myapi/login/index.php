<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header('Content-type: application/json');

require_once("../connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // insert
    $data = json_decode(file_get_contents("php://input",), true);
    //$data = $_POST;
    if (!empty($data["email"]) && !empty($data["password"])) {
        $data = filterData($data);

        $sqlQuery = "select * from users where email = '$data[email]' and password = '$data[password]'";

        $result = $conn->query($sqlQuery);
        if ($result->num_rows > 0) {
            $response = [
                "code" => 200,
                "message" => "Login Successfully",
                "email" => $data["email"]
            ];
        } else {
            $response = [
                "code" => 500,
                "message" => "Invalid Username or Passoword"
            ];
        }
    } else {
        $response = [
            "code" => 499,
            "message" => "Please fillout all fields"
        ];
    }
} 

echo json_encode($response);