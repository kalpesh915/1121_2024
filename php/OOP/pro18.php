<?php
    class Greetings{
        final public function gn(){
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

    /*
        Fatal error: Cannot override final method Greetings::gn() in C:\xampp\htdocs\khushboo\OOP\pro18.php on line 9
    */
?>
