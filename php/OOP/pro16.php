<?php

    /*      
                    From                
        Access      Same Class      Sub Class       Object
        Private     Yes             No              No
        Protected   Yes             Yes             No
        Public      Yes             Yes             Yes
    */

    class Math1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum is ".($ip1 + $ip2);
        }
        public function Sub($ip1, $ip2){
            echo "<hr> Sub is ".($ip1 - $ip2);
        }
    }

    class Math2 extends Math1{
        public function Mul($ip1, $ip2){
            echo "<hr> Mul is ".($ip1 * $ip2);
        }
        protected function Div($ip1, $ip2){
            echo "<hr> Div is ".($ip1 / $ip2);
        }
    }

    class Math3 extends Math2{
        public function Mod($ip1, $ip2){
            echo "<hr> Mod is ".($ip1 % $ip2);
        }

        public function Caller($ip1, $ip2){
            $this->Div($ip1, $ip2);
        }
    }

    $obj1 = new Math2();
    $obj1->Div(111, 22);
?>
