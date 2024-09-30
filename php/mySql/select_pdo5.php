<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sampledb";


    class TableRows extends RecursiveIteratorIterator{
        public function __construct($data){
            parent::__construct($data, self::LEAVES_ONLY);
        }

        function beginChildren(): void{
            echo "<tr>";
        }

        public function current(): mixed{
            return "<td>".parent::current()."</td>";
        }

        function endChildren(): void{
            echo "</tr>";
        }
    }

    try{
        $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$statement = $connection->prepare("select * from students where id >= 10");
        $statement = $connection->prepare("select * from students where fname = 'demo'");
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
        echo "<table border='1'><tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>";
  
        foreach(new TableRows(new RecursiveArrayIterator($statement->fetchAll())) as $k => $v){
            echo $v;
        }

        echo "</table>";

    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    $connection = null;
?>