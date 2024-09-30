<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    $sqlQuery = "select * from students";

    $result = $connection->query($sqlQuery);

    echo "<table border='1'>";
    echo "<tr>
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

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
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
    }else{
        echo "<tr>
            <td colspan='8'>No Data Found in Table</td>
        </tr>";
    }

    echo "</table>";
    $connection->close();
?>