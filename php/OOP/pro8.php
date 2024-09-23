<?php
    class Fruit{
        public $name = "";
        public $color = "";
        public $weight = "";
        public $price = "";
        public $country = "";

        public function __construct($name, $color, $weight, $price, $country){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->price = $price;
            $this->country = $country;
        }

        public function getDetails(){
            echo "<hr> Fruit is {$this->name} from {$this->country} color {$this->color} weight is {$this->weight} and Price is {$this->price}";
        }
    }

    $obj1 = new Fruit("Apple", "Red", "120GMS", "200INR", "India");
    $obj2 = new Fruit("Dragon", "Pink", "300GMS", "100INR", "China");
    $obj3 = new Fruit("Orange", "Green", "100GMS", "20INR", "India");

    $obj1->getDetails();
    $obj2->getDetails();
    $obj3->getDetails();
?>
