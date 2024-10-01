<?php
    session_start();
    ob_start();

    if(isset($_SESSION["email"])){
        $_SESSION["msg"] = $_SESSION["email"]. " User Logged out Successfully";
        unset($_SESSION["email"]);
    }else{
        $_SESSION["msg"] = "Invalid Logout Attempt";
    }

    header("location:index.php");
?>