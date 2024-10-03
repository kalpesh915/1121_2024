<?php
    require_once("commons/session.php");
    require_once("server/connection.php");

    $sqlQuery = "select * from users where email = '$email'";
    $result = $connection->query($sqlQuery);
    extract($result->fetch_assoc());
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
        <img src="<?= $photopath; ?>"  class="profilePhoto" style="display:block; margin:auto;">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="my-3">
                <label for="fname">Enter First Name</label>
                <input type="text" id="fname" name="fname" required placeholder="Enter First Name" class="input" value="<?= $fname; ?>">
            </div>

            <div class="my-3">
                <label for="lname">Enter Last Name</label>
                <input type="text" id="lname" name="lname" required placeholder="Enter Last Name" class="input"  value="<?= $lname; ?>">
            </div>


            <div class="my-3">
                <label for="phone">Enter Phone Number</label>
                <input type="text" id="phone" name="phone" required placeholder="Enter Phone Number" class="input" pattern="[0-9]{10,15}"  value="<?= $phone; ?>">
            </div>

            <div class="my-3">
                <label for="address">Enter Address</label>
                <textarea id="address" name="address" required placeholder="Enter Address" class="input" style="resize: none;"><?= $address; ?></textarea>
            </div>

            <div class="my-3">
                <label for="city">Enter City Name</label>
                <input type="text" id="city" name="city" required placeholder="Enter City Name" class="input" value="<?=$city;?>">
            </div>

            <div class="my-3">
                <label for="gender">Select Gender</label>
                <select id="gender" name="gender" required placeholder="Select Gender" class="input">
                    <option></option>
                    <option value="male" <?= $gender == "male" ? "selected" : ""; ?>>Male</option>
                    <option value="female" <?= $gender == "female" ? "selected" : ""; ?>>Female</option>
                </select>
            </div>

            <div class="my-3">
                <label for="photo">Select Profile Photo</label>
                <input type="file" id="photo" name="photo" placeholder="Select Profile Photo" class="input" accept=".jpg">
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
    if(isset($_POST["updateProcess"])){
        $fname = filterData($_POST["fname"]);
        $lname = filterData($_POST["lname"]);
        $phone = filterData($_POST["phone"]);
        $address = filterData($_POST["address"]);
        $city = filterData($_POST["city"]);
        $gender = filterData($_POST["gender"]);
        $photo = $_FILES["photo"];

        //echo $address;

        if(!empty($photo["name"])){
            $validTypes = ["image/jpg", "image/jpeg"];
            $type = $photo["type"];

            if (in_array($type, $validTypes)) {
                // delete old photo
                unlink($photopath);
                $source = $photo["tmp_name"];
                $random = rand(9999, 99999);
                $filename = $photo["name"];
                $destination = "assests/images/$random $filename";
                move_uploaded_file($source, $destination);

                $sqlQuery = "update users set photopath = '$destination' where email = '$email'";
                $connection->query($sqlQuery);
            }else{
                $_SESSION["msg"] = "Must Select .JPG Image";
            }
        }
        $sqlQuery = "update users set fname = '$fname', lname = '$lname', phone = '$phone', city = '$city', address = '$address', gender = '$gender' where email = '$email'";
        //echo $sqlQuery;
        $connection->query($sqlQuery);

        $_SESSION["msg"] = "Profile Updated";
        header("location:profile.php");

    }
?>