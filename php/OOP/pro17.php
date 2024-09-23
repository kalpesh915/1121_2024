<?php
    class Greetings{
        public function gn(){
            echo "<hr> Good Noon";
        }
    }

    class Greetings1 extends Greetings{
        public function gn(){
            echo "<hr> Good Night";
        }
    }

    $obj1 = new Greetings1();
    $obj1->gn();
?>