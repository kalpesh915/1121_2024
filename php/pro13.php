<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Without static variable

        function msg(){
            $count = 1;
            echo " $count";
            $count++;
        }

        for($i=1; $i<=10; $i++){
            msg();
        }
    ?>
</body>
</html>