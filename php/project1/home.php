<?php
    require_once("commons/session.php");
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
        <?php 
            require_once("server/connection.php");
            $sqlQuery = "select * from users where email = '$email'";

            //echo "$sqlQuery";

            $result = $connection->query($sqlQuery);
            $row = $result->fetch_assoc();

            //print_r($row);

            // create variables from array
            extract($row);

        ?>

        <table>
            <tr>
                <th colspan="2">
                    <img src="<?= $photopath; ?>" class="profilePhoto">
                </th>
            </tr>
            <tr>
                <th>First Name</th>
                <!-- <td><?php //echo $row["fname"]; ?></td>
                <td><?= $row["fname"];?></td> -->
                <td><?= $fname; ?></td>
            </tr>

            <tr>
                <th>Last Name</th>
                <td><?= $lname; ?></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><?= $email; ?></td>
            </tr>

            <tr>
                <th>City</th>
                <td><?= $city; ?></td>
            </tr>

            <tr>
                <th>Address</th>
                <td><?= $address; ?></td>
            </tr>

            <tr>
                <th>Gender</th>
                <td><?= $gender; ?></td>
            </tr>

            <tr>
                <th>Registerd At</th>
                <td><?= $created_at; ?></td>
            </tr>

            <tr>
                <th>Updated At</th>
                <td><?= $updated_at; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>