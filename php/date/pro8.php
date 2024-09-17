<?php
    $enddate = strtotime("31 december");

    $days = (time() - $enddate);

    echo abs(ceil($days / 60 / 60 / 24));
?>
