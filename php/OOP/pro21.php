<?php
    /*
        Abstract

    */

    abstract class Car{
        public abstract function fuel();
        public abstract function gear();
    }
    
    class Innova extends Car{
        public function fuel(){
            echo "<hr> Innova Used Diesel as Fuel";
        }

        public function gear(){
            echo "<hr> Innova Comes with Manual Gear";
        }
    }

    class I20 extends Car{
        public function fuel(){
            echo "<hr> I20 Used Petrol as Fuel";
        }

        public function gear(){
            echo "<hr> I20 Comes with Autometic Gear";
        }
    }

    $innova = new Innova();
    $innova->gear();
    $innova->fuel();

    $i20 = new I20();
    $i20->gear();
    $i20->fuel();
?>