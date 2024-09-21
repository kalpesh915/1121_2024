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
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
    ?>
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
        
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif"];
        $counts = count($files["name"]);
        
        //echo $counts;
        $mb = 2;
        $bytes = $mb * 1048576;

        $success = 0;
        $error = 0;

        for($i=0; $i<$counts; $i++){
            $tmpname = $files["tmp_name"][$i];
            $type = $files["type"][$i];
            $size = $files["size"][$i];

            if(in_array($type, $validTypes)){
                if($size < $bytes){
                    $date = date("dmYhis").rand(9999, 99999);
                    $source = $files["tmp_name"][$i];
                    $destination = "uploads/$date". $files["name"][$i];

                    move_uploaded_file($source, $destination);
                    $success++;
                }else{
                    $error++;
                }
            }else{
                $error++;
            }
        }

        $_SESSION["msg"] = "Total $counts files selected, $success Files Uplaoded and $error files are Failed to Uplaod";

        header("location:pro8.php");
    }
?>