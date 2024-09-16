<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="fname">Enter First Name : </label>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Enter Last Name : </label>
        <input type="text" name="lname" id="lname"><br>
        <label for="email">Enter Email Address : </label>
        <input type="text" name="email" id="email"><br>
        <label for="website">Enter Website : </label>
        <input type="text" name="website" id="website"><br>
        <label for="lname">Select Gender : </label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female <br>
        <input type="submit" value="Send Data" >
        <input type="reset" value="Reset">
    </form>
</body>
</html>