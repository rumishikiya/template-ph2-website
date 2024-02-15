<?php
$dsn = 'mysql:host=db;dbname=posse;charset=utf8';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection to DB';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// $sql = 'SELECT * FROM questions';
// foreach ($dbh->query($sql) as $row) {
//     var_dump( $row);
//   }