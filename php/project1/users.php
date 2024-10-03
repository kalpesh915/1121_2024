<?php
require_once("commons/session.php");
require_once("server/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="assests/css/client.css" rel="stylesheet">
    <link href="assests/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once("commons/header.php");
    require_once("commons/menu.php");
    ?>

    <div>
        <table>
            <thead style="background-color: olive; color:white;">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>EMail</th>
                <th>Address</th>
                <th>City</th>
                <th>Gender</th>
                <th>Photo</th>
            </thead>

            <tbody>
                <?php
                    $sqlQuery= "select * from users where not email = '$email'";
                    $result = $connection->query($sqlQuery);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>$row[id]</td>
                                <td>$row[fname]</td>
                                <td>$row[lname]</td>
                                <td>$row[email]</td>
                                <td>$row[address]</td>
                                <td>$row[city]</td> 
                                <td>$row[gender]</td>
                                <td><img src='$row[photopath]' class='profilePhoto'></td>
                            </tr>";
                        }
                    }else{
                        echo "<tr>
                            <th colspan='8'>No Other Users are Found in Database</th>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

