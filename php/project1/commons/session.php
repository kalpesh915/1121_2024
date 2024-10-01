<?php
    session_start();
    ob_start(); // output buffer

    date_default_timezone_set("Asia/Kolkata");

    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }else{
        $_SESSION["msg"] = "Please Login First";
        header("location:index.php");
    }
?>