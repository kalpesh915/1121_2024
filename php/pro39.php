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
        
        $ip1 = 101;
        $ip2 = 22;

        $ans = ($ip1 > $ip2 ? $ip1 : $ip2);

        echo "Maximum is $ans";
        
    ?>
</body>
</html>