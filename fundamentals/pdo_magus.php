<?php 

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'laradev', '*07AF1DA1167810656EC10D04870D5E34E01316CB');
} catch (PDOException $e) {
    die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll());

require 'index3.view.php';