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
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select Files for Upload</label>
        <input type="file" name="file1[]" id="file1" required multiple>
        <input type="submit" value="Upload Files" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){

        $files = $_FILES["file1"];
        print_r($files);
    }
?>