<?php
function getConnection(){
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbname = 'facturations';

    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $db = new PDO($dsn, $user, $password);
    } catch (PDOException $ex) {
       die('ERROR: '. $ex->getMessage());
    }
    return $db;
}
?>