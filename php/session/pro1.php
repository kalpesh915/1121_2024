<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["fname"] = "Khushboo";
        $_SESSION["lname"] = "Kaneriya";
        $_SESSION["city"] = "Rajkot";

        print_r($_SESSION);
    ?>
</body>
</html>