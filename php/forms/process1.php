<?php
    print_r($_GET);
    //echo "Welcome {$_GET['fname']} {$_GET['lname']}";

    $fname = $_GET["fname"];
    $lname = $_GET["lname"];

    echo "Welcome $fname $lname";
?>  