<?php
    function exclaim($ip){
        return $ip."!";
    }

    function question($ip){
        return $ip."?";
    }

    function comma($ip){
        return $ip.",";
    }

    function printer($ip, $callback){
        echo "<hr>".$callback($ip);
    }

    printer("Welcome", "comma");
    printer("Welcome", "exclaim");
    printer("Welcome", "question");
?>