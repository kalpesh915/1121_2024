<?php
    /*
    
    */

    class Demo{
        const GREETINGS = "Good Morning";

        public function printer(){
            echo "<hr>".self::GREETINGS;
        }
    }

    $obj1 = new Demo();

    echo "<hr>".Demo::GREETINGS;
    $obj1->printer();
?>
