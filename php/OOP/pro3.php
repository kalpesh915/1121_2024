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
    $obj2 = new Fruit();
    $obj3 = new Fruit();
    

    $obj1->getDetails();
    $obj1->setDetails();
    $obj1->getDetails();
    $obj2->getDetails();
    $obj3->getDetails();
?>
