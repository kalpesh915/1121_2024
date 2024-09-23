<?php
    class Fruit{
        # Fix / Hardcoded
        public $color = "red";
        public $price = 100;
        public $weight = "110GMS";
    }

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();
    $obj4 = new Fruit();
    $obj5 = new Fruit();
    echo "<hr> Color is {$obj1->color} Price is {$obj1->price} and Weight is {$obj1->weight}";
    echo "<hr> Color is {$obj2->color} Price is {$obj2->price} and Weight is {$obj2->weight}";
    echo "<hr> Color is {$obj3->color} Price is {$obj3->price} and Weight is {$obj3->weight}";
    echo "<hr> Color is {$obj4->color} Price is {$obj4->price} and Weight is {$obj4->weight}";
    echo "<hr> Color is {$obj5->color} Price is {$obj5->price} and Weight is {$obj5->weight}";
?>
