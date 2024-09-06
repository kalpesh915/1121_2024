<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>".__DIR__;
        echo "<hr>".__FILE__;
        echo "<hr>".__LINE__;

        function msg(){
            echo "<hr>".__FUNCTION__;
        }

        msg();
    ?>
</body>
</html>