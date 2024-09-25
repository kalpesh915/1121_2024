<?php
    class Greetings{
        public function __construct(){
            self::gm();
        }

        static public function gm(){
            echo "<hr> Good Morning";
        }
    }


    $obj = new Greetings();
?>