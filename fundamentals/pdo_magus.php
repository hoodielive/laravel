<?php 

$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'laradev', 'password');

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]);

#require 'index3.view.php';