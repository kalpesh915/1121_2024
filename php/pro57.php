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
            
        */ 

        function msg(){
            echo "<hr> Welcome to world of PHP Function";
        }
        
        $data = ["city" => "Rajkot", "text"=>"Abc", "msg" => msg()];

        $data["msg"];
    ?>
</body>
</html>