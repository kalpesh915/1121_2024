<?php
     declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select Any File : </label>
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload new File" name="process">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        $file1 = $_FILES["file1"];
        print_r($file1);
    }
?>
