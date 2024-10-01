<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="assests/css/login.css" rel="stylesheet">
</head>

<body>
    <h1 class="header">Registration Form</h1>
    <?php
    if (isset($_SESSION["msg"])) {
        echo "<hr>" . $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <div class="my-3">
            <label for="fname">Enter First Name</label>
            <input type="text" id="fname" name="fname" required placeholder="Enter First Name" class="input">
        </div>

        <div class="my-3">
            <label for="lname">Enter Last Name</label>
            <input type="text" id="lname" name="lname" required placeholder="Enter Last Name" class="input">
        </div>

        <div class="my-3">
            <label for="email">Enter Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email Address" class="input">
        </div>

        <div class="my-3">
            <label for="password">Enter Email Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter Email Password" class="input">
        </div>

        <div class="my-3">
            <label for="cpassword">Enter Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword" required placeholder="Enter Confirm Password" class="input">
        </div>

        <div class="my-3">
            <label for="phone">Enter Phone Number</label>
            <input type="text" id="phone" name="phone" required placeholder="Enter Phone Number" class="input" pattern="[0-9]{10,15}">
        </div>

        <div class="my-3">
            <label for="address">Enter Address</label>
            <textarea id="address" name="address" required placeholder="Enter Address" class="input" style="resize: none;"></textarea>
        </div>

        <div class="my-3">
            <label for="city">Enter City Name</label>
            <input type="text" id="city" name="city" required placeholder="Enter City Name" class="input">
        </div>

        <div class="my-3">
            <label for="gender">Select Gender</label>
            <select id="gender" name="gender" required placeholder="Select Gender" class="input">
                <option></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="my-3">
            <label for="photo">Select Profile Photo</label>
            <input type="file" id="photo" name="photo" required placeholder="Select Profile Photo" class="input" accept=".jpg">
        </div>

        <div class="my-3">
            <input type="submit" value="Register" class="btnsubmit" name="registerProcess">
            <input type="reset" value="Reset" class="btnreset">
        </div>
    </form>

    <div class="my-3" style="text-align: center;">
        <a href="index.php" class="btnsubmit">Already have Account</a>
        <?php
        if (isset($_SESSION["msg"])) {
            echo "<hr>" . $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
    </div>
</body>

</html>

<?php
if (isset($_POST["registerProcess"])) {
    require_once("server/connection.php");

    $fname = filterData($_POST["fname"]);
    $lname = filterData($_POST["lname"]);
    $email = filterData($_POST["email"]);
    $password = filterData($_POST["password"]);
    $cpassword = filterData($_POST["cpassword"]);
    $phone = filterData($_POST["phone"]);
    $address = filterData($_POST["address"]);
    $city = filterData($_POST["city"]);
    $gender = filterData($_POST["gender"]);
    $photo = $_FILES["photo"];

    if ($password === $cpassword) {
        $validTypes = ["image/jpg", "image/jpeg"];
        $type = $photo["type"];

        if (in_array($type, $validTypes)) {
            $sqlQuery = "select * from users where email = '$email'";
            $result = $connection->query($sqlQuery);

            if ($result->num_rows > 0) {
                $_SESSION["msg"] = "$email user are already registered with us";
            } else {
                // file upload code
                $source = $photo["tmp_name"];
                $random = rand(9999, 99999);
                $filename = $photo["name"];
                $destination = "assests/images/$random $filename";

                move_uploaded_file($source, $destination);
                $password = sha1($password);
                $sqlQuery = "insert into users (fname, lname, email, password, phone, address, city, gender, photopath) values ('$fname', '$lname', '$email', '$password', '$phone', '$address', '$city', '$gender', '$destination')";
                $connection->query($sqlQuery);

                $_SESSION["msg"] = "$email User created on Server";
            }
        } else {
            $_SESSION["msg"] = "Must Select .JPG Files Only";
        }
    } else {
        $_SESSION["msg"] = "Confirm Password does not Match";
    }

    header("location:register.php");
}
?>