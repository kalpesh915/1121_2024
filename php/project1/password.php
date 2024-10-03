<?php
require_once("commons/session.php");

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
    require_once("commons/menu.php");
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
                <label for="password">Enter Current Password</label>
                <input type="password" id="cpassword" name="cpassword" required placeholder="Enter Current Password" class="input">
            </div>

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
    $cpassword = filterData($_POST["cpassword"]);
    $npassword = filterData($_POST["npassword"]);
    $cnpassword = filterData($_POST["cnpassword"]);

    if($npassword === $cnpassword){
        $cpassword = sha1($cpassword);
        $sqlQuery = "select email from users where email = '$email' and password = '$cpassword'";
        $result = $connection->query($sqlQuery);
        if($result->num_rows > 0){
            $npassword = sha1($npassword);
            $sqlQuery = "update users set password = '$npassword' where email = '$email'";
            $connection->query($sqlQuery);
            $_SESSION["msg"] = "Password Updated in Profile";
        }else{
            $_SESSION["msg"] = "Current Password does not Match";    
        }
    }else{
        $_SESSION["msg"] = "Confirm Password does not Match";
    }

    header("location:password.php");
}
?>