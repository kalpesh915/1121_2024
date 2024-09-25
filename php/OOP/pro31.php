<?php
    /*

    */

    namespace Furniture;
    class Table{
        public function __construct(){
            echo "<hr> Furniture Table";
        }
    }

    namespace Code;
    class Table{
        public function __construct(){
            echo "<hr> HTML Table";
        }
    }

    use Furniture as FR;
    $obj = new FR\Table();
?>