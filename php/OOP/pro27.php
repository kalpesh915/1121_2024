<?php
    class Greetings{
        public static $city = "Rajkot";
        public function __construct(){
            echo "Welcome to ".self::$city;
        }

        static public function gm(){
            echo "<hr> Good Morning";
        }
    }


    $obj = new Greetings();

    echo "<hr> Outside of Class ".Greetings::$city;
?>