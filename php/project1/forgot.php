<?php
session_start();
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Page</title>
    <link href="assests/css/login.css" rel="stylesheet">
</head>

<body>
    <h1 class="header">Forgot Password</h1>
    <?php
    if (isset($_SESSION["msg"])) {
        echo "<hr>" . $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="my-3">
            <label for="email">Enter Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email Address" class="input">
        </div>

        <div class="my-3">
            <input type="submit" value="Send OTP" class="btnsubmit" name="loginProcess">
            <input type="reset" value="Reset" class="btnreset">
        </div>
    </form>

    <div class="my-3" style="text-align: center;">
        <a href="index.php" class="btnsubmit">Login</a>
        <a href="forgot.php" class="btnsubmit">Forgot Password</a>
    </div>
</body>

</html>

<?php
if (isset($_POST["loginProcess"])) {
    require_once("server/connection.php");

    $email = filterData($_POST["email"]);


    $sqlQuery = "select * from users where email = '$email'";
    $result = $connection->query($sqlQuery);
    if ($result->num_rows > 0) {
        $_SESSION["forgotemail"] = $email;

        $otp = rand(99999, 999999);
        $content = "<hr>Your Password Reset OTP is <br> <h1>$otp</h1><hr>";

        // smtp object and configure
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "kalpesh915@gmail.com";
        $mail->Password = "xrnejtvsczcntjti";
        $mail->SMTPSecure = "TLS";
        $mail->Port = "587";

        $mail->setFrom("kalpesh915@gmail.com", "Password Reset OTP");
        $mail->isHTML(true);

        $mail->addAddress("$email");
        $mail->Subject = "Password Reset OTP";
        $mail->Body = "$content";

        if($mail->send()){
            $_SESSION["forgotemail"] = $email;
            
            $sqlQuery = "delete from passwordresetotp where email ='$email'";
            $connection->query($sqlQuery);

            $sqlQuery = "insert into passwordresetotp (email, otptext) values ('$email', '$otp')";
            $connection->query($sqlQuery);

            header("location:enterotp.php");
        }else{
            $_SESSION["msg"] = "Error while sending email";
            header("location:forgot.php");
        }
        
    } else {
        $_SESSION["msg"] = "Invalid Email Address";
        header("location:forgot.php");
    }
}
?>