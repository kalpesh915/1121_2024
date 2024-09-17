<?php
    echo "<hr>Time ".date("h:i:s");
    echo "<hr>".date_default_timezone_get();
    date_default_timezone_set("Asia/Kolkata");
    echo "<hr>Time ".date("h:i:s");
    echo "<hr>".date_default_timezone_get();
?>