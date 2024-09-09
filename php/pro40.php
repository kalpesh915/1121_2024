<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            (condition ? true part : false part)
        */ 
        
        $username = "Khushboo Kaneriya";
        
        echo "<hr> Welcome ".($username ?? "Guest");
    ?>
</body>
</html>