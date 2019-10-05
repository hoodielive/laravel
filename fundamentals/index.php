<?php 

$task = [
    'title' => 'Finish homework', 
    'due'   => 'today', 
    'assigned_to' => 'Larry', 
    'completed' => false
];

function dumper($one, $two, $three) {
    var_dump($one, $two, $three);
}


dd('hello', 'big', 'world');

require 'index2.view.php';