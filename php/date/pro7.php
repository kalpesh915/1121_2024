<?php
    $date = strtotime("today");
    echo "<hr>Time ".date("d/m/Y h:i:s a", $date);
    $date = strtotime("yesterday");
    echo "<hr>Time ".date("d/m/Y h:i:s a", $date);
    $date = strtotime("+5 days");
    echo "<hr>Time ".date("d/m/Y h:i:s a", $date);
    $date = strtotime("+5 years");
    echo "<hr>Time ".date("d/m/Y h:i:s a", $date);
?>
