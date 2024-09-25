<?php
    /*
        Abstract

    */

    abstract class Car{
        public function __construct(){
            // this is constrtor
        }

        // abstract
        public abstract function fuel();
        public abstract function gear();

        // non abstract methods
        public function seatBelts(){
            echo "<hr>All cars have 5 seat Belts";
        }
    }
    
    class Innova extends Car{
        public function fuel(){
            echo "<hr> Innova Used Diesel as Fuel";
        }

        public function gear(){
            echo "<hr> Innova Comes with Manual Gear";
        }

        public function seating(){
            echo "<hr> Innova have 8 Seats";
        }
    }

    class I20 extends Car{
        public function fuel(){
            echo "<hr> I20 Used Petrol as Fuel";
        }

        public function gear(){
            echo "<hr> I20 Comes with Autometic Gear";
        }

        public function seating(){
            echo "<hr> I20 have 5 Seats";
        }
    }

    $innova = new Innova();
    $innova->gear();
    $innova->fuel();
    $innova->seatBelts();
    $innova->seating();

    $i20 = new I20();
    $i20->gear();
    $i20->fuel();
    $i20->seatBelts();
    $i20->seating();
?>