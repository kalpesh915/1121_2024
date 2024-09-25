<?php
    /*
        Abstraction
    */

    interface Car{
        public function getSeating();
        public function getFuel();
    }

    class Innova implements Car{
        public function getSeating(){
            echo "Innova with 8 Seats";
        }

        public function getFuel(){
            echo "Innova with Diesel vrient";
        }
    }

    // class I10 implements Car{

    // }

    $innova = new Innova();
    $innova->getSeating();
    $innova->getFuel();

?>