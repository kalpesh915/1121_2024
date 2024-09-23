<?php
    final class Greetings{
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

    /*
        Fatal error: Class Greetings1 cannot extend final class Greetings in C:\xampp\htdocs\khushboo\OOP\pro19.php on line 8
    */
?>
