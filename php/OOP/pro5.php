<?php
    class Fruit{
        # Fix / Hardcoded
        public $color = "red";
        public $price = 100;
        public $weight = "110GMS";

        public function getDetails(){
            echo "<hr> Color is {$this->color} Price is {$this->price} and Weight is {$this->weight}";
        }

        public function setDetails(){
            $this->color = "Yellow";
            $this->price = 10;
            $this->weight = "40GMS";
        }
    }

    $obj1 = new Fruit();

    echo var_dump($obj1 instanceof Fruit);
?>
