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
    if (isset($_SESSION["msg"])) {
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }

    ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select File for Upload : </label>
        <input type="file" name="file1" id="file1" required accept=".jpg, .gif, .png, .jpeg">
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>

</html>

<?php
if (isset($_POST["uploadProcess"])) {

    $validTypes = ["image/jpg", "image/jpeg", "image/gif", "image/png"];

    $file1 = $_FILES["file1"];
    $type = $file1["type"];

    if (in_array($type, $validTypes)) {
        $source = $file1["tmp_name"];
        $name = $file1["name"];
        $destination = "uploads/$name";

        move_uploaded_file($source, $destination);
        $_SESSION["msg"] = "$name File Uplaoded on Server";
    }else{
        $_SESSION["msg"] = "Invalid file format to uplaod file";
    }

    header("location:pro3.php");
}
?>