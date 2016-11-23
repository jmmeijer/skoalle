<?php
require_once '/includes/dbconnect.php'

    // http://stackoverflow.com/questions/18655706/pdo-with-insert-into-through-prepared-statements
    // http://stackoverflow.com/questions/9858073/how-to-insert-array-into-mysql-using-pdo-and-bindparam
    
$query = $dbh->prepare("INSERT INTO testtable(name, lastname, age)
    VALUES(:fname, :sname, :age)");
$query->execute(array(
    "firstname" => "Bob",
    "sname" => "Desaunois",
    "age" => "18"
));