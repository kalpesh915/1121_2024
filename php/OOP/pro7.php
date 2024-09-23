<?php
    class Fruit{
        public $name = "";
        public $color = "";
        public $weight = "";
        public $price = "";
        public $country = "";

        public function __construct(){
            //echo "<hr> Constructor Called";
            $this->name = "Apple";
            $this->color = "Red";
            $this->weight = "120GMS";
            $this->price = "200 INR";
            $this->country = "India";
        }

        public function getDetails(){
            echo "<hr> Fruit is {$this->name} from {$this->country} color {$this->color} weight is {$this->weight} and Price is {$this->price}";
        }
    }

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();
    $obj4 = new Fruit();
    $obj5 = new Fruit();

    $obj1->getDetails();
    $obj2->getDetails();
    $obj3->getDetails();
?>
