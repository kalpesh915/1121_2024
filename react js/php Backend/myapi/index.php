<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header('Content-type: application/json');


require_once("connection.php");
// Get Data API
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sqlQuery = "select * from students where id = $id";
        $result = $conn->query($sqlQuery);

        if ($result->num_rows > 0) {
            $response = [
                "code" => 200,
                "message" => "Student Data Found with ID $id",
                "data" => $result->fetch_assoc()
            ];
        } else {
            $response = [
                "code" => 404,
                "message" => "Student Data Not Found with ID $id"
            ];
        }
    } else {
        $sqlQuery = "select * from students";
        $result = $conn->query($sqlQuery);

        $response = [
            "code" => 200,
            "message" => "Student Data Found",
            "data" => $result->fetch_all(MYSQLI_ASSOC)
        ];
    }
} else if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sqlQuery = "delete from students where id = $id";
        $conn->query($sqlQuery);

        if ($conn->affected_rows > 0) {
            $response = [
                "code" => 200,
                "message" => "Data Deleted with ID $id",
            ];
        } else {
            $response = [
                "code" => 200,
                "message" => "Something went wrong While Deleting Data with ID $id",
            ];
        }
    } else {
        $response = [
            "code" => 499,
            "message" => "Must Enter ID for Delete Data",
        ];
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // insert
    $data = json_decode(file_get_contents("php://input",), true);

    if (!empty($data["fname"]) && !empty($data["lname"]) && !empty($data["city"]) && !empty($data["email"]) && !empty($data["phone"]) && !empty($data["gender"])) {
        $data = filterData($data);

        $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('$data[fname]', '$data[lname]', '$data[city]', '$data[email]', '$data[phone]', '$data[gender]')";

        if ($conn->query($sqlQuery) === true) {
            $response = [
                "code" => 200,
                "message" => "New Student Created"
            ];
        } else {
            $response = [
                "code" => 500,
                "message" => "Error while Creating New Student "
            ];
        }
    } else {
        $response = [
            "code" => 499,
            "message" => "Please fillout all fields"
        ];
    }
} else if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    // update
    $data = json_decode(file_get_contents("php://input",), true);
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        if (!empty($data["fname"]) && !empty($data["lname"]) && !empty($data["city"]) && !empty($data["email"]) && !empty($data["phone"]) && !empty($data["gender"])) {
            $data = filterData($data);

            $sqlQuery = "update students set fname = '$data[fname]', lname = '$data[lname]', city = '$data[city]', email = '$data[email]', phone = '$data[phone]', gender = '$data[gender]' where id = $id";

            $conn->query($sqlQuery);

            if ($conn->affected_rows > 0) {
                $response = [
                    "code" => 200,
                    "message" => "Student Data Updated in Database"
                ];
            } else {
                $response = [
                    "code" => 500,
                    "message" => "No Data Update in Database"
                ];
            }
        } else {
            $response = [
                "code" => 499,
                "message" => "Please fillout all fields"
            ];
        }
    } else {
        $response = [
            "code" => 499,
            "message" => "Must Enter ID for Update Data",
        ];
    }
} else {
    $response = [
        "code" => 405,
        "message" => "Only GET Method is Allowed on This Route"
    ];
}


echo json_encode($response);
