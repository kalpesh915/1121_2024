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
                <input type="submit" value="Delete Profile" class="btnsubmit" name="deleteProcess">
                <input type="reset" value="Reset" class="btnreset">
            </div>
        </form>


    </div>
</body>

</html>

<?php
if (isset($_POST["deleteProcess"])) {
    require_once("server/connection.php");
    $cpassword = filterData($_POST["cpassword"]);

    $cpassword = sha1($cpassword);
    $sqlQuery = "select email from users where email = '$email' and password = '$cpassword'";
    //echo $sqlQuery;
    $result = $connection->query($sqlQuery);
    if ($result->num_rows > 0) {
        $sqlQuery = "delete from users where email = '$email'";
        $connection->query($sqlQuery);
        unset($_SESSION["email"]);
        $_SESSION["msg"] = "$email User Deleted form Database";
        header("location:index.php");
    } else {
        $_SESSION["msg"] = "Current Password does not Match";
        header("location:delete.php");
    }
}
?>