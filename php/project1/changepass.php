<?php
session_start();
ob_start();

if (isset($_SESSION["validemail"])) {
    $validemail = $_SESSION["validemail"];
} else {
    $_SESSION["msg"] = "Invlid Attempt of change Password";
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="assests/css/client.css" rel="stylesheet">
    <link href="assests/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once("commons/header.php");
    ?>

    <div>
        <div class="my-3" style="text-align: center;">
            <?php
            if (isset($_SESSION["msg"])) {
                echo "<hr>" . $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
            ?>
        </div>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="my-3">
                <label for="password">Enter New Password</label>
                <input type="password" id="npassword" name="npassword" required placeholder="Enter New Password" class="input">
            </div>

            <div class="my-3">
                <label for="cpassword">Enter Confirm Password</label>
                <input type="password" id="cnpassword" name="cnpassword" required placeholder="Enter Confirm Password" class="input">
            </div>


            <div class="my-3">
                <input type="submit" value="Update Profile" class="btnsubmit" name="updateProcess">
                <input type="reset" value="Reset" class="btnreset">
            </div>
        </form>


    </div>
</body>

</html>

<?php
if (isset($_POST["updateProcess"])) {
    require_once("server/connection.php");
    $npassword = filterData($_POST["npassword"]);
    $cnpassword = filterData($_POST["cnpassword"]);

    if ($npassword === $cnpassword) {
        $npassword = sha1($npassword);
        $sqlQuery = "update users set password = '$npassword' where email = '$validemail'";
        $connection->query($sqlQuery);
        $_SESSION["msg"] = "Password Reset Successfully";
        header("location:index.php");
    } else {
        $_SESSION["msg"] = "Confirm Password does not Match";
        header("location:changepass.php");
    }

    
}
?>