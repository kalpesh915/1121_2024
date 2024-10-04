<?php
session_start();
if(isset($_SESSION["forgotemail"])){
    $email = $_SESSION["forgotemail"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link href="assests/css/login.css" rel="stylesheet">
</head>

<body>
    <h1 class="header">Enter OTP</h1>
    <?php
    if (isset($_SESSION["msg"])) {
        echo "<hr>" . $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="my-3">
            <label for="email">Enter Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email Address" class="input" value="<?= $email; ?>" readonly>
        </div>

        <div class="my-3">
            <label for="text">Enter OTP</label>
            <input type="text" id="otp" name="otp" required placeholder="Enter OTP" class="input">
        </div>

        <div class="my-3">
            <input type="submit" value="Verify OTP" class="btnsubmit" name="verifyProcess">
            <input type="reset" value="Reset" class="btnreset">
        </div>
    </form>

</body>

</html>

<?php
if (isset($_POST["verifyProcess"])) {
    require_once("server/connection.php");
    $email = filterData($_POST["email"]);
    $otp = filterData($_POST["otp"]);

    $sqlQuery = "select * from passwordresetotp where email = '$email' and otptext = '$otp'";
    $result = $connection->query($sqlQuery);

    if($result->num_rows > 0){
        $_SESSION["validemail"] = $email;
        header("location:changepass.php");
    }else{
        $_SESSION["msg"] = "Invalid OTP Entered";
        header("location:enterotp.php");
    }
}
?>