<?php
    # Public Access Modifier

    class Student{
        public $name = "Khushboo";

        public function getName(){
            echo "<hr>Welcome {$this->name}";
        }
    }

    $obj1 = new Student();
    echo $obj1->name;
    $obj1->getName();
?>