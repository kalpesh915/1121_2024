<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "<script>alert('Hacked');</script>";
        $ip1 = htmlspecialchars($ip1);
        echo $ip1; 
    ?>
</body>
</html>