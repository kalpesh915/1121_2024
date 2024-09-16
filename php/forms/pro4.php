<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Required variables
        $fname = $lname = $email = $website = $gender = "";
        $fnameErr = $lnameErr = $emailErr = $websiteErr = $genderErr = "";

        if(empty($_POST["fname"])){
            $fnameErr = "First name required";
        }else{
            $fname = filterData($_POST["fname"]);
        }

        if(empty($_POST["lname"])){
            $lnameErr = "Last name required";
        }else{
            $lname = filterData($_POST["lname"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "EMail required";
        }else{
            $email= filterData($_POST["email"]);
        }

        if(empty($_POST["website"])){
            $websiteErr = "Website required";
        }else{
            $website = filterData($_POST["website"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender required";
        }else{
            $gender = filterData($_POST["gender"]);
        }
    }
    
    function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="fname">Enter First Name : </label>
        <input type="text" name="fname" id="fname"><span class="error">* <?= $fnameErr; ?></span><br>
        <label for="lname">Enter Last Name : </label>
        <input type="text" name="lname" id="lname"><span class="error">* <?= $lnameErr; ?></span><br>
        <label for="email">Enter Email Address : </label>
        <input type="text" name="email" id="email"><span class="error">* <?= $emailErr; ?></span><br>
        <label for="website">Enter Website : </label>
        <input type="text" name="website" id="website"><span class="error">* <?= $websiteErr; ?></span><br>
        <label for="lname">Select Gender : </label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female <span class="error">* <?= $genderErr; ?></span><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>