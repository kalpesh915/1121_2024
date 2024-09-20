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
        echo "<hr>".session_id();
        //session_unregister();
        //session_destroy();
        session_create_id();
        echo "<hr>".session_id();
    ?>
</body>
</html>