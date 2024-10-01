<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="assests/css/login.css" rel="stylesheet">
</head>

<body>
    <h1 class="header">Login Form</h1>
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
            <label for="password">Enter Email Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter Email Password" class="input">
        </div>

        <div class="my-3">
            <input type="submit" value="Login" class="btnsubmit" name="loginProcess">
            <input type="reset" value="Reset" class="btnreset">
        </div>
    </form>

    <div class="my-3" style="text-align: center;">
        <a href="register.php" class="btnsubmit">Create an Account</a>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        require_once("server/connection.php");

        $email = filterData($_POST["email"]);
        $password = sha1(filterData($_POST["password"]));

        $sqlQuery = "select * from users where email = '$email' and password = '$password'";
        $result = $connection->query($sqlQuery);
        if($result->num_rows > 0){
            $_SESSION["email"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = "Invalid Username or Password";
            header("location:index.php");
        }
    }
?>
