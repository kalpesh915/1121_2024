<?php
     declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="fname">Enter First Name :</label>
        <input type="text" name="fname" id="fname" required><br>
        <label for="fname">Enter Last Name :</label>
        <input type="text" name="lname" id="lname" required><br>
        <input type="submit" value="Send Data" name="process">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];

        echo "Welcome $fname $lname";

        //print_r($_POST);
    }
?>
