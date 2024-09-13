<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $password = "Khushboo Kaneriya";

    $salt = "Rajkot";
    //echo "my Password is ".$password;
    echo "<hr>my Password is ".md5($password);
    echo "<hr>my Password is ".sha1($password);
    echo "<hr>my Password is ".base64_encode($password); // reverse
    echo "<hr>my Password is ".password_hash($password, PASSWORD_BCRYPT);
    echo "<hr>my Password is ".password_hash($password.$salt, PASSWORD_BCRYPT);
?>