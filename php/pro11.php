<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /// Global
        $username = "Khushboo Kaneriya";
        function msg(){
            global $username;
            echo "<hr> Welcome $username to PHP";
        }

        msg();
        echo "<hr> Welcome $username to PHP";
    ?>
</body>
</html>