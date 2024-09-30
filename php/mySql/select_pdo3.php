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

        echo "<table border='1'><tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>";
        foreach($result as $row){
            echo "<tr>
                <td>$row[id]</td>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[city]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[gender]</td>
                <td>$row[created_at]</td>
                <td>$row[updated_at]</td>
            </tr>";
        }

        echo "</table>";

    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>