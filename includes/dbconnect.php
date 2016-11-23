<?php

// Haal het bestand config erbij
require_once '/config.php';

try {
    $dbh = new PDO('mysql:host=' . $config['database']['dbhost'] . ';dbname=' . $config['database']['dbname'], $config['database']['dbuser'], $config['database']['dbpass']);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
