<?php
    trait Math1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum is ".($ip1 + $ip2);
        }

        public function Sub($ip1, $ip2){
            echo "<hr> Sub is ".($ip1 - $ip2);
        }
    }

    trait Math2{
        public function Mul($ip1, $ip2){
            echo "<hr> Mul is ".($ip1 * $ip2);
        }

        public function Div($ip1, $ip2){
            echo "<hr> Div is ".($ip1 / $ip2);
        }
    }

    trait Math3{
        public function Mod($ip1, $ip2){
            echo "<hr> Mod is ".($ip1 % $ip2);
        }
    }

    class Calculator{
        // what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
        use Math1, Math2, Math3;
    }

    $calc = new Calculator();

    $calc->Sub(111, 22);
    $calc->Sum(111, 22);
    $calc->Mul(111, 22);
    $calc->Div(111, 22);
    $calc->Mod(111, 22);
?>