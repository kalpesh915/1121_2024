<?php
    # Private Access Modifier

    class Student{
        private $name = "Khushboo";

        public function getName(){
            echo "<hr>Welcome {$this->name}";
        }
    }

    $obj1 = new Student();
    echo $obj1->name;
    
?>