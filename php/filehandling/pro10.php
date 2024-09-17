<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="fname" id="fname" required><br>
        <textarea name="data" id="data" required></textarea>
        <input type="submit" value="Write Data" name="process">
    </form>
</body>

</html>
<?php

if (isset($_POST["process"])) {
    $fname = $_POST["fname"];
    $data = $_POST["data"];

    $file = fopen($fname, "w");

    if (!$file) {
        die("Unable to open file");
    }

    fwrite($file, $data);

    fclose($file);
}

?>