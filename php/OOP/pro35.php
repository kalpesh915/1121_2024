<?php

    class MyIterator implements Iterator{
        public $data = [];
        public $index = 0;

        public function __construct($city){
            $this->data = array_values($city);
            $this->index = 0;
        }

        public function next(): void{
            $this->index+=2;
        }

        public function rewind(): void{
            $this->index = 0;
        }

        public function valid(): bool{
            return $this->index < count($this->data);
        }

        public function current(): mixed{
            return $this->data[$this->index];
        }

        public function key(): mixed{
            return $this->index;
        }
    }

    function printer(iterable $city){
        foreach($city as $ct){
            echo "Welcome to $ct<br>";
        }
    }

    $city = new MyIterator(["Rajkot", "Baroda", "Bhuj", "Surat", "Junagadh", "Jamnagar", "Amreli"]);
    printer($city);
?>