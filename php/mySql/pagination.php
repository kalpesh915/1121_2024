<?php
    /// database connection code
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("Connection Failed Due to ".$connection->connect_error);
    }

    if(isset($_GET["pageno"])){
        $pageno = $_GET["pageno"];
    }else{
        $pageno = 0;
    }

    $pagesize = 15;

    // count number of records in database table
    $sqlQuery = "select count(id) from students";
    $result = $connection->query($sqlQuery);
    $row = $result->fetch_assoc();
    $count = $row["count(id)"];
    //echo $count;

    $pages = ceil($count / $pagesize);
    //echo $pages;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $offset = $pageno * $pagesize;
                $sqlQuery = "select * from students limit $pagesize offset $offset";
                $result = $connection->query($sqlQuery);

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
            ?>
        </tbody>
    </table>
    <div class="text-center">
        <?php
            for($x=0; $x<$pages; $x++){
                echo "<a href='pagination.php?pageno=$x' class='btn btn-primary mx-1'>".($x+1)."</a>";
            }
        ?>
    </div>
</body>
</html>
<?php

?>