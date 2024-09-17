<?php
    $date = mktime(18, 30, 20, 10, 5, 2020);
    echo $date; // number of seconds from 1st jan 1970 00:00:00 unix time stamp
    echo "<hr>Time ".date("d/m/Y h:i:s a", $date);
?>