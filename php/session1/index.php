<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once("cdn.php");
    ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-4">Login Form</h1>

        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                <label for="email" class="form-lable">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Email Password">
                <label for="password" class="form-lable">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == "admin@gmail.com" and $password == "admin"){
            $_SESSION["username"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Invalid Username or Password
            </div>";    
            header("location:index.php");
        }
    }
?>